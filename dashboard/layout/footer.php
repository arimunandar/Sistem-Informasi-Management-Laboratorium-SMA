		<!-- BEGIN SCROLL TO TOP -->
		<div class="scroll-to-top"></div>
		<!-- END SCROLL TO TOP -->
	</div>

	<!-- BEGIN JS FRAMEWORK -->
	<script src="assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="assets/plugins/dropzone/dropzone.min.js"></script>
	<script src="assets/plugins/jquery-gritter/js/jquery.gritter.min.js"></script>
	<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/plugins/pace/pace.min.js"></script>
	<script src="assets/plugins/jquery-totemticker/jquery.totemticker.min.js"></script>
	<script src="assets/plugins/jquery-resize/jquery.ba-resize.min.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockUI.min.js"></script>
	<script src="assets/plugins/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="assets/plugins/switchery/switchery.min.js"></script>
	<script src="assets/plugins/bootstrap-summernote/summernote.min.js"></script>
	<script src="assets/plugins/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="assets/plugins/jquery-niftymodal/js/classie.js"></script>
	<script src="assets/plugins/jquery-niftymodal/js/modalEffects.js"></script>
	<script src="assets/js/datatables.js"></script>
	<script src="assets/plugins/fullcalendar/lib/moment.min.js"></script>
	<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/calendar.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.labels.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.resize.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.orderBars.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.pie.min.js"></script>
	<script src="assets/plugins/jquery-flot/curvedLines.js"></script>
	<script src="assets/plugins/skycons/skycons.js"></script>
	<script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-us-aea-en.js"></script>

	<script src="assets/plugins/icheck/icheck.min.js"></script>
	<script src="assets/plugins/switchery/switchery.min.js"></script>
	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/plugins/select2/select2.js"></script>
	<script src="assets/plugins/bootstrap-slider/js/bootstrap-slider.js"></script>
	<script src="assets/js/form.js"></script>
	<script type="text/javascript">
		/* MULTI UPLOAD */
		$("#my-dropzone").dropzone({ url: "/file/post" });
	</script>
	<script type="text/javascript">		
		/* POPUP GALLERY */
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small>by Ryan McGuire</small>';
				}
			}
		});
		
		/* SWITCHERY */
		if (Array.prototype.forEach) {
			var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
			elems.forEach(function(html) {
				var switchery = new Switchery(html);
			});
		} else {
			var elems = document.querySelectorAll('.js-switch');
			for (var i = 0; i < elems.length; i++) {
				var switchery = new Switchery(elems[i]);
			}
		}
	</script>
	<script type="text/javascript">
		/* SUMMERNOTE WYSIWYG */
		$('#summernote').summernote({
			height: 300
		});

		$('#click2edit').click(function(){
			$(this).summernote({
				focus: true,
				onblur: function(e) {
					$('#click2edit').destroy();
				}
			});
		});

		$('#airmode').summernote({
			height: 300,
			airMode: true
		});
	</script>
	<script type="text/javascript">
		/* MAGNIFIC POPUP */
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small></small>';
				}
			}
		});
	</script>	
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/skin-selector.js"></script>
	<!-- END JS TEMPLATE -->
</body>
</html>