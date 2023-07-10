<?php 

/*

Template Name: AskDoc Template

*/

get_header();

?>

<div class="askDocPageBack">
    <div class="askDocPage mainView">
        <div class="generalHeading highMargined centeredText">
            <h1>از فیزیوتراپیست بپرسید</h1>
            <span>سؤال خود را از پزشک بپرسید</span>
        </div>
        <div class="askDocPageSection highMargined mediumPadding">
            <div class="askDocPageSectionRight highRadius mediumPadding">
                <?php echo do_shortcode('[contact-form-7 id="31" title="فرم پرسش از فیزیوتراپیست"]') ?>
            </div>
            <div class="askDocPageSectionLeft">
                <div class="siteMessage successMessage">پاسخگویی به سؤالات حداکثر دو روز به طول می انجامد</div>
                <div class="siteMessage successMessage">لطفا سؤال خود را شفاف و واضح بیان کنید</div>
                <div class="siteMessage successMessage">لطفا قبل از بیان سؤال خود قسمت سؤالات متداول مطالعه کنید</div>
                <div class="siteMessage successMessage">مشخصات سؤال کنندگان نزد پزشک متخصص محرمانه باقی خواهد ماند.</div>
            </div>
        </div>
    </div>
</div>




<?php get_footer();