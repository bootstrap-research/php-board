<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet" 
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
            crossorigin="anonymous">
    <title>Write - Blog</title>
  <!-- Toast UI Editor -->
	<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />
</head>
<body>

    <form action="../config/writesave.php">

		<div id="editor">글을 써주세요!</div>

			<script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>

				<script>
					const Editor = toastui.Editor;
				
					const editor = new Editor({

						el: document.querySelector('#editor'),
						height: '600px',
						initialEditType: 'markdown',
						previewStyle: 'vertical'

					});
					
					seeHtml = function(){
						alert(editor.getHTML());
					}

					seeMd = function(){
						alert(editor.getMarkdown());
					}

				</script>

			<div>
				<button type="submit" class="btn btn-dark col ms-3">submit</button>
		</div>

    </form>

</body>