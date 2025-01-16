<footer class="footer">
    <div class="container">
        <div class="footer-row">
            <!-- About Section -->
            <div class="footer-col">
                <h4>About Us</h4>
                <p>
                    স্বাদে এবং পুষ্টিতে ভরপুর Exotica Agro-এ আপনি পাবেন দেশের সেরা এবং স্বাস্থ্যকর আচারের সংগ্রহ। আমাদের
                    আচার তৈরি হয় তাজা এবং প্রাকৃতিক উপকরণ দিয়ে, যা আপনার প্রতিদিনের খাদ্যতালিকায় এক অনন্য স্বাদ যোগ
                    করবে।
                    {{-- <ul>
                        <li> <b>তেল ও মশলার আচার:</b> </li>
                    </ul>
 আম, লেবু, শসা, পেয়ারা, ইত্যাদি।
তাজা আচার: কাঁচা এবং পাকা উপকরণ দিয়ে তৈরি।
বিশেষ ডেলিভারি: দ্রুত এবং নিরাপদ ডেলিভারি সেবা।
আপনার প্রিয় আচারটি এখনই অর্ডার করুন এবং এক নতুন স্বাদের অভিজ্ঞতা নিন! --}}
                </p>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ url('/') }}">হোম</a></li>
                    <li><a href="{{ route('product.category', 0) }}">শপ</a></li>
                    <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

            <!-- Social Media -->
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="{{ setting()->fb ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ setting()->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ setting()->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <br>
                <ul>
                    <li>
                        <a href="{{ url('about') }}">আমাদের সম্পর্কে</a>
                    </li>

                    <li>
                        <a href="{{ url('privacy-policy') }}">প্রাইভেসি পলিসি</a>
                    </li>

                    <li>
                        <a href="{{ url('tearms-condition') }}">শর্তাবলী </a>
                    </li>

                </ul>
            </div>

            <!-- Newsletter -->
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p>Subscribe to receive updates, exclusive offers, and more.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your Email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>

    </div>
</footer>
<style>
    /* Footer Styles */
    .footer {
        background-color: #222;
        color: #eee;
        padding: 40px 20px;
        font-family: Arial, sans-serif;
    }

    .footer .container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .footer-row {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
    }

    .footer-col {
        flex: 1 1 250px;
        margin: 10px 0;
    }

    .footer-col h4 {
        color: #fff !important;
        margin-bottom: 15px;
        font-size: 18px;
        text-transform: uppercase;
    }

    .footer-col p,
    .footer-col ul {
        margin: 0;
        padding: 0;
        font-size: 14px;
        line-height: 1.6;
    }

    .footer-col ul {
        list-style: none;
    }

    .footer-col ul li {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        color: #bbb !important;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-col ul li a:hover {
        color: #fff !important;
    }

    .social-links a {
        display: inline-block;
        margin-right: 10px;
        color: #bbb !important;
        font-size: 20px;
        transition: color 0.3s;
    }

    .social-links a:hover {
        color: #00aced !important;
    }

    .newsletter-form {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .newsletter-form input {
        flex: 1;
        padding: 10px;
        border: none;
        border-radius: 5px;
        outline: none;
        font-size: 14px;
    }

    .newsletter-form button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #00aced !important;
        color: #fff !important;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
    }

    .newsletter-form button:hover {
        background-color: #0084c4 !important;
    }

    .footer-bottom {
        text-align: center;
        font-size: 12px;
        color: #aaa;
        border-top: 1px solid #444;
        padding-top: 10px;
    }

    @media (max-width: 768px) {

        /* Apply text-align center only on mobile devices */
        footer {
            text-align: center;
        }
    }
</style>
