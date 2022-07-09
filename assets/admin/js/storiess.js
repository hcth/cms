$(document).ready(function () {
    $('#summernote').summernote({
        height: 200
    });

    $("body").on("click", ".btnCancelStories", function () {
        location.href = base_url + 'stories';
    });

    $("body").on("click", ".deleteStories", function () {
        var story_id = $(this).data('story_id');
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    type: 'POST',
                    url: base_url + 'deleteStories',
                    data: {
                        story_id: story_id
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == "success") {
                            swal(
                                    'Deleted!',
                                    'Story deleted.',
                                    'success'
                                    )
                            $("#deleteStory" + story_id).closest('tr').remove();
                            $("#stories_count").text(data.total_stories);
                            $("#stories_per_traveller").text(data.total_stories);
                            $("#stories_total_views").text(data.total_views_count);
                            
                        } else {
                            swal({
                                "title": "",
                                "text": "Error Occured in deleting Story!",
                                "type": "error",
                                "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                            });
                        }
                    }
                });
            } else if (result.dismiss === 'cancel') {
                swal(
                        'Cancelled',
                        'Your story is safe :)',
                        'error'
                        )
            }
        });
    });

    $("body").on("click", ".btnSubmitStories", function () {
        var story_desc = $("#summernote").val();
        var story_head = $("#story_head").val();
        var stay_days = $("#stay_days").val();
        var destination = $("#destination").val();
        var suitable = $("#suitable").val();
        var theme = $("#theme").val();
        var story_id = $("#story_id").val();
        var meta_tags = $("#meta_tags").val();
        var meta_description = $("#meta_description").val();
        var meta_url = $("#meta_url").val();
        var views_count = $("#views_count").val();
        var is_published = $("#is_published").val();

        var suitable_arr = new Array();
        $('#div_suitable .select2-selection__choice').each(function () {
            suitable_arr.push($(this).attr('title').trim());
        });
        $("#hid_suitable").val(suitable_arr.toString());

        var themes_arr = new Array();
        $('#div_theme .select2-selection__choice').each(function () {
            themes_arr.push($(this).attr('title').trim());
        });
        $("#hid_theme").val(themes_arr.toString());

//        var destination_arr = new Array();
//        $('#div_destination .select2-selection__choice').each(function () {
//            destination_arr.push($(this).attr('title').trim());
//        });
//        $("#hid_destination").val(destination_arr.toString());

        $.ajax({
            type: 'POST',
            url: base_url + 'saveStories',
            data: {story_desc: story_desc,
                story_head: story_head,
                stay_days: stay_days,
                destination: destination,
                suitable: suitable_arr.toString(),
                theme: themes_arr.toString(),
                story_id: story_id,
                meta_tags: meta_tags,
                meta_description: meta_description,
                meta_url: meta_url,
                views_count: views_count,
                is_published: is_published
            },
            dataType: 'json',
            success: function (data) {
                if (data.status == "success") {
                    swal({
                        "title": "",
                        "text": "The Story has been successfully saved!",
                        "type": "success",
                        "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                    });

                    setTimeout(function () {
                        location.href = base_url + 'stories';
                    }, 1000);
                } else {
                    swal({
                        "title": "",
                        "text": "Error Occured in saving Story!",
                        "type": "error",
                        "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                    });
                }
            }
        });
    });
});