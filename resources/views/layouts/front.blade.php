<!DOCTYPE html>
<html lang="en-US">

<style>
.goog-te-banner-frame.skiptranslate {
	display: none !important;
} 
body {
	top: 0px !important; 
}
.goog-te-gadget-simple{
	border: none;
}
.goog-te-gadget-simple span{
	display: none;
	opacity: 0;
}
</style>
@include("includes.front.styles")

<body>
    <div class="page-wrapper">

        <!-- Main Header-->
        @include("includes.front.header")
        <!--End Main Header -->

        @yield("container")

        <!-- Main Footer -->
        @include('includes.front.footer')

    </div>
    <!--End pagewrapper-->

    <!-- Search Popup -->
    @include("includes.front.search")
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    @include("includes.front.scrolltop")

    @include("includes.front.scripts")
	<script type="text/javascript">
		// <![CDATA[
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
		// ]]>
	</script>
	<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
</body>

</html>