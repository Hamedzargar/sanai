<?php 

/*

Template Name: Booking Template

*/

get_header();

?>


<div class="bookingFormPageBack">
    <div class="bookingFormPage mainView">
        <div class="generalHeading highMargined centeredText">
            <h1>نوبت دهی آنلاین</h1>
            <span>کلینیک فیزیوتراپی سنایی</span>
        </div>
        <div class="bookingFormSection highMargined mediumPadding">
            <div class="bookingFormSectionRight highRadius mediumPadding">
                <?php echo do_shortcode('[contact-form-7 id="39" title="فرم نوبت دهی آنلاین"]') ?>
            </div>
            <div class="bookingFormSectionLeft">
                <div class="siteMessage successMessage">ثبت نوبت اینترنتی به معنای تعیین وقت قطعی نیست</div>
                <div class="siteMessage successMessage">بعد از ثبت اینترنتی نویت منتظر تماس منشی کلینیک باشید</div>
                <div class="siteMessage successMessage">لطفا شماره همراه خود را در فرم وارد کنید</div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();