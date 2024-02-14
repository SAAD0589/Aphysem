<?php
$logo = get_field('logo'); 
?>
<style>
.footer {
    color: #ffffff;
    background: #006345;

}

.send_not {
    border-radius: 10px;
    border: 1px solid #D9D9D9;
    background: #FFF;
    width: 345px;
    height: 46px;
}

.botton_footer {
    color: #005847;
    font-size: 12px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}

.bg_go_to {
    top: -8%;
    left:80%;
    cursor: pointer;
    position: absolute;
    width:15%;
}

.button_go_to {
    background: #c9dc90;
    width: 44px;
    height: 44px;
    flex-shrink: 0;
    position: absolute;
    left: 81.5%;
    top: -6%;
    cursor: pointer;

}

.my_svg {
    top: 33%;
    left: 36%;
    cursor: pointer;

}

.myicons:hover {
    background-color: #6FB63F;
    cursor: pointer;
}

/* Initial styling for the container */
</style>
<div class='footer d-flex row justify-content-center p-5 position-relative m-0'>

    <div class='bg_go_to position-absolute  d-none d-md-inline'>
        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" viewBox="0 0 66 66" fill="none">
            <circle cx="33.0005" cy="33" r="33" fill="#006345" />
        </svg>
    </div>
    <div class='button_go_to rounded-circle position-absolute  d-none d-md-inline' onclick="scrollToTop()">
        <svg class='my_svg position-absolute' xmlns="http://www.w3.org/2000/svg" width="12" height="14"
            viewBox="0 0 12 14" fill="none">
            <path
                d="M5.25436 12.5933C5.25436 13.0051 5.58825 13.339 6.00012 13.339C6.412 13.339 6.74588 13.0051 6.74588 12.5933L5.25436 12.5933ZM6.52746 0.879487C6.23622 0.588249 5.76403 0.588249 5.47279 0.879487L0.726784 5.62549C0.435545 5.91673 0.435545 6.38892 0.726784 6.68016C1.01802 6.9714 1.49021 6.9714 1.78145 6.68016L6.00012 2.46149L10.2188 6.68016C10.51 6.9714 10.9822 6.9714 11.2735 6.68016C11.5647 6.38892 11.5647 5.91673 11.2735 5.62549L6.52746 0.879487ZM6.74588 12.5933L6.74589 1.40682L5.25436 1.40682L5.25436 12.5933L6.74588 12.5933Z"
                fill="#006345" />
        </svg>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12 text-center">
        <img src="<?php echo $logo ?>" alt="" srcset="">
        <p class='py-3  '>Norem ipsum dolor sit amet, consec tetur adipiscing elit. Nunc vulputate libero et velit
            interdum,
            ac aliquet odio mattis. Class aptent taciti sociosqu ad lito.</p>

        <div class='d-flex justify-content-center my-3'>
            <div class='myicons mx-2 p-2 rounded-circle'>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                </svg>
            </div>
            <div class='myicons mx-2 p-2 rounded-circle'>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path
                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                </svg>
            </div>
            <div class='myicons mx-2 p-2 rounded-circle'>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
            </div>
            <div class='myicons mx-2 p-2 rounded-circle'>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
            </div>
        </div>

    </div>
    <div class="col-xl-3 col-md-6 col-sm-12">
        <h3 class=''>Quick Links</h3>
        <p>Lorem ipsum</p>
        <p>Lorem ipsum</p>
        <p>Lorem ipsum</p>
        <p>Lorem ipsum</p>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12">
        <h3>Quick Links</h3>
        <p>Lorem ipsum</p>
        <p>Lorem ipsum</p>
        <p>Lorem ipsum</p>
        <p>Lorem ipsum</p>
    </div>
    <div class="col-xl-3 col-md-6 col-sm-12">
        <h3>News Letter</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        <!-- <div class='position-relative'>
            <input class='send_not form-control position-relative' type="text">
            <div class='p-2 rounded-3 position-absolute' style='cursor:pointer;top: 50%;right:-1%; transform: translateY(-50%);background:#6FB63F'>
                <svg 
                     xmlns="http://www.w3.org/2000/svg" width="25"
                    height="25" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path
                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                </svg>
            </div>

        </div> -->

    </div>

</div>

<div class='botton_footer text-center py-1'>
    <p>COPYRIGHT © 2023 APHYSEM ALL RIGHTS RESERVED</p>
</div>

<?php wp_footer(); ?>
<!-- <script>
// Get the button
var mybutton = document.getElementById("scrollBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
};

// Scroll to the top of the document when the button is clicked
function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
}
</script> -->
<script src="wp-content/themes/saadproject/custom/js/jquery.min.js"></script>
<script src="wp-content/themes/saadproject/custom/js/jquery-jvectormap-2.0.5.min.js"></script>
<script src="wp-content/themes/saadproject/custom/js/MA_jvm.js"></script>