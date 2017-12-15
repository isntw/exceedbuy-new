@push('style')   
<style type="text/css">
    /* Hide AddToAny vertical share bar when screen is less than 980 pixels wide */
    @media screen and (max-width: 980px) {
        .a2a_floating_style.a2a_vertical_style { display: none; }
    }
</style>
@endpush

<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;">
    <a  class="a2a_button_facebook"></a>
    <!--<a href='https://www.facebook.com/sharer/sharer.php?u=WeLoveGorgeousBabies' class="a2a_button_instagram"></a>-->
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
</div>

@push('scripts')   
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endpush
