var ComponentsEditors = function () {
    
    var handleWysihtml5 = function () {
        if (!jQuery().wysihtml5) {
            return;
        }

        if ($('.wysihtml5').size() > 0) {
            $('.wysihtml5').wysihtml5({
                "stylesheets": ["../../assets/global/plugins/bootstrap-wysihtml5/wysiwyg-color.css"]
            });
        }
    }

    var handleSummernote = function () {
		
		
    	 $('#summernote_1').summernote({
 			height: 300,
 			toolbar: [
 				['style', ['style']],
 				['font', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
 				['fontname', ['fontname']],
 				['fontsize', ['fontsize']], // Still buggy
 				['color', ['color']],
 				['para', ['ul', 'ol', 'paragraph']],
 				['height', ['height']],
 				['table', ['table']],
 				['insert', ['link', 'picture', 'video', 'hr']],
 				['view', ['fullscreen', 'codeview']],
 				['help', ['help']],
				['picture',['picture']]
 			  ],
 		});
        //API:
        //var sHTML = $('#summernote_1').code(); // get code
        //$('#summernote_1').destroy(); // destroy
    }

    return {
        //main function to initiate the module
        init: function () {
            handleWysihtml5();
            handleSummernote();
        }
    };

}();