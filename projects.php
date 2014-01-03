<html>

<!--
AUTHOR: Dhruv Bhaskar
LAST MODIFIED: 1 January 2013
-->

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<style type="text/css">

.deck-frame {
	display:block;
	position:relative;
	_position:relative;
	width:705px;
	margin:10px auto 24px auto;
	height:500px;
	box-shadow:0 5px 10px rgba(0, 0, 0, 0.3);
}

</style>

</head>

<body>

	<iframe src="projects.html" frameborder="1" class="deck-frame"></iframe>
	
	<script type="text/javascript">
		$(function() {
		  var $frame = $('.deck-frame');

		  var resetScaling = function() {
			$frame[0].contentWindow.$.deck('toggleScale');
			$frame[0].contentWindow.$.deck('toggleScale');
		  };

		  /*var replaceLink = function(linkSelector, linkHref) {
			$frame.contents().find(linkSelector).attr('href', linkHref);
			resetScaling();
		  };

		  $('#style-themes').change(function() {
			replaceLink('#style-theme-link', $(this).val());
		  });

		  $('#transition-themes').change(function() {
			replaceLink('#transition-theme-link', $(this).val());
		  });*/
		});
	</script>

</body>

</html>