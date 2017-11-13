@extends('layouts.web.app')

@section('content')
<!-- END: header -->
<section class="probootstrap-slider flexslider">
    <ul class="slides">
        <li style="background-image: url({{url('img/slider_1.jpg')}});" class="overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="slides-text probootstrap-animate" data-animate-effect="fadeIn">
                            <h2>Baby Ear Muffs</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<!-- END: slider  -->

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-9 col-md-9 mb50">
                <p><img src="{{url('img/slider_1.jpg')}}" class="img-responsive img-border" id="image"></p>
                <h2>Baby Ear Muffs By Exceedbuy</h2>
                <br>
                <h4>THE PERFECT WAY TO KEEP YOUR LITTLE ONE’S HEARING SAFE</h4>
                <p>Are you worried about loud noises upsetting your little one, causing them discomfort, or even 
                    damaging their over-sensitive little ears? Well, you don’t have to be. These wonderful baby hearing protection ear 
                    muffs allow you to create a healthy, safe, and comfortable environment free of any loud noises for your child, virtually anywhere, any time!</p>
                <h4>Α MUST HAVE & FOR EVERY BABY BOY & GIRL</h4>
                <p>ExceedBuy baby ear muffs are made to be not only safe, but also fun and comfortable for all toddlers from 3 to 24 months.
                    Their lightweight and ergonomic construction ensures they do not cause your baby any kind of discomfort, and their cute, unisex design 
                    is perfect for little boys and girls alike!</p>
                <h4>PERFECT FOR CROWDED PLACES & LOUD NOISE ENVIRONMENTS </h4>
                <p>Whether you’re looking for a way to protect your baby’s hearing from noises like loud music and the sound your vacuum cleaner makes,
                    or a way to safely take them with you in loud noise environments, these ear muffs are your best choice. Crowded places, festivals, 
                    concerts, loud family gatherings - your little one will stay safe and comfortable anywhere!</p>
                <h4>PREMIUM QUALITY, TESTED FOR SAFETY</h4>
                <p>When it comes to your baby’s ear muffs and hearing protection, we make a point of using nothing but the absolutely safest materials, 
                    and we’ve got the lab tests to prove that! The earmuffs are made with high quality BPA-free plastic, and they feature comfortable
                    soft-padded headband and interiors</p>
                <h4>100% SATISFACTION, OR YOUR MONEY BACK! </h4>
                <p> At ExceedBuy, we’re actually very proud of our baby ear muffs, and would recommend them to every toddler parent. After all, 
                    they’re what we’ve used for our babies’ hearing protection ourselves! If, however, they turn out to be not what you were looking for, 
                    just contact us and we’ll issue you a full refund!</p>
                <h3>Keep Your Little Angel’s Hearing Safe, In the Most Stylish & Comfortable Way Possible!</h3>
                <ul>
                    <li>Are you the parent of a sweet, beautiful baby boy or girl? Congratulations!</li>
                    <li>Being a parent, however, is a tough job. We should know - we’ve been there ourselves!</li>
                    <li>Aren’t you sick and tired of constantly worrying about every little thing that could cause discomfort or pose a threat to your little one’s health and wellbeing?</li>
                    <li>Did you know, for example, that loud noises can be dangerous to the sensitive hair cells found in the inner ear of infants and toddlers?</li>
                    <li>It’s true, but don’t worry; protecting your little angel’s hearing is a simple as popping on a pair of noise-reducing ear muffs!</li>
                </ul>


                <p><a href="#" target="_blank" role="button" class="btn btn-primary btn-sm">Visit Product on Amazon</a></p>
            </div>
            <div class="col-xs-2 col-md-2">
                <img src="{{url('img/slider_1.jpg')}}" class="img-responsive img-border images probootstrap-animate">
                <img src="{{url('img/slider_2.jpg')}}" class="img-responsive img-border images probootstrap-animate">
                <img src="{{url('img/slider_3.jpg')}}" class="img-responsive img-border images probootstrap-animate">
                <img src="{{url('img/slider_4.jpg')}}" class="img-responsive img-border images probootstrap-animate">
            </div>
        </div>

    </div>
</div>
</section>
@endsection
@push('scripts')
<script>
    function pictureChange(image)
    {
        document.getElementById("image").src = image;
    }

    $(".images").click(function () {
        image = $(this).attr("src");
        pictureChange(image);
    });
</script>
@endpush