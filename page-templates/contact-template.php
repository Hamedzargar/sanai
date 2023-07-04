<?php 

/*

Template Name: Contact Template

*/

get_header();

?>

<div class="contactPageBack extraHighMargined">
    <div class="contactPage mainView">
        <div class="generalHeading bigHeading highMargined centeredText">
            <h1>تماس با ما</h1>
            <span>کلینیک سنایی</span>
        </div>
        <div class="contactFirstSection">
            <div class="FirstSectionRight">
                <?php echo do_shortcode('[contact-form-7 id="23" title="فرم تماس 1"]') ?>
            </div>
            <div class="FirstSectionLeft">
                <img src="<?php bloginfo('template_directory') ?>/img/11.jpg" alt="">
            </div>
        </div>
        <div class="contactPageBoxBack extraHighMargined">
            <div class="contactPageBox mainView">
                <div class="contactBoxs gradient2">
                    <div class="topSection">
                        <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13.839 13.84c-2.372 2.378-5.12 4.648-6.209 3.56-1.557-1.56-2.517-2.913-5.951-.155s-.796 4.598.712 6.106c1.74 1.74 8.226.091 14.64-6.32s8.06-12.898 6.32-14.64c-1.512-1.505-3.347-4.139-6.105-.711s-1.403 4.39.153 5.946c1.088 1.094-1.182 3.841-3.56 6.214z"/></svg>
                        <span>شماره تماس</span>
                    </div>
                    <div class="bottomSection">
                        <a class="lowMargined" href="#">
                            <span>123456</span>
                        </a>
                        <a href="#">
                            <span>123456</span>
                        </a>
                    </div>
                </div>
                <div class="contactBoxs gradient2">
                    <div class="topSection">
                        <svg width="20" height="20" viewBox="0 0 24 24" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg"><path d="M17.657 5.304c-3.124-3.073-8.189-3.073-11.313 0a7.78 7.78 0 0 0 0 11.13L12 21.999l5.657-5.565a7.78 7.78 0 0 0 0-11.13zM12 13.499c-.668 0-1.295-.26-1.768-.732a2.503 2.503 0 0 1 0-3.536c.472-.472 1.1-.732 1.768-.732s1.296.26 1.768.732a2.503 2.503 0 0 1 0 3.536c-.472.472-1.1.732-1.768.732z"/></svg>                        
                        <span>آدرس</span>
                    </div>
                    <div class="bottomSection">
                        <a class="lowMargined" href="#">
                            <span>لورم ایپسوم لورم ایپسوم لورم ایپسوم لورم لورم لورم لورم</span>
                        </a>
                    </div>
                </div>
                <div class="contactBoxs gradient2">
                    <div class="topSection">
                        <svg width="20" height="20" viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M25.916 8v15.359l7.076 7.075-2.828 2.828L21.9 25l.016-.018V8zm-23.7 26.139H0v4.746h2.216a9.422 9.422 0 0 0 1.306 2.934l-1.521 1.522 2.693 2.691 1.544-1.543a9.416 9.416 0 0 0 2.808 1.23v2.216h4.761V45.72a9.437 9.437 0 0 0 2.867-1.269l1.486 1.484 2.692-2.691-1.485-1.484c.572-.863 1-1.83 1.268-2.861h2.218v-4.776h-2.218a9.51 9.51 0 0 0-1.23-2.8l1.448-1.449-2.692-2.691-1.426 1.424a9.508 9.508 0 0 0-2.918-1.301v-2.221h-4.78v2.221a9.475 9.475 0 0 0-2.858 1.266l-1.483-1.485-2.693 2.694 1.484 1.484a9.349 9.349 0 0 0-1.271 2.874zm5.294 2.372a3.917 3.917 0 1 1 7.834 0 3.917 3.917 0 0 1-7.834 0zM.025 22.997v2.007C.012 24.67 0 24.336 0 24s.012-.67.025-1.003z"/><path d="M35.012 2.665A23.855 23.855 0 0 0 30.443.89c-.074-.021-.149-.04-.225-.06a23.08 23.08 0 0 0-2.369-.505A23.49 23.49 0 0 0 26.78.174l-.084-.009A23.739 23.739 0 0 0 24 0C11.11 0 .598 10.162.027 22.911h4.028C4.624 12.375 13.322 4 24 4c.416 0 .828.013 1.236.039l.007.021a20.112 20.112 0 0 1 3.645.557c1.484.379 2.902.922 4.235 1.609l.021-.021.036.018a19.908 19.908 0 0 1 9.136 9.704l-.026.026A19.785 19.785 0 0 1 44 24c0 11.046-8.954 20-20 20v4c9.3 0 17.358-5.293 21.343-13.027l.028.015C51.435 23.2 46.797 8.73 35.012 2.665z"/></svg>
                        <span>ساعات کاری</span>
                    </div>
                    <div class="bottomSection">
                        <a class="lowMargined" href="#">
                            <span>پنجشنبه و جمعه</span>
                        </a>
                        <a href="#">
                            <span>ساعت 7 الی 15</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();