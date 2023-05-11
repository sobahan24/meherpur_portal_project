@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | উপপরিচালক, স্থানীয় সরকার
@endsection

@section('contant')
<div id="printable_area">
    <div class="profile">

        <div class="photo">
            <img style="max-width:700px;" src="{{ asset('frontend/images/officer_list/মোজাহিদুল-ইসলাম.png') }}" alt="মোজাহিদুল ইসলাম" width="" height="">
        </div>
        <div class="details">
            <h4 class="name">জনাব মৃধা মোঃ মোজাহিদুল ইসলাম</h4>
            <p class="designation">উপপরিচালক, স্থানীয় সরকার / পরিচালক,মুজিবনগর মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্স / সদস্য-সচিব, জেলা ক্রীড়া সংস্থা</p>
            <hr>
            <p class="mobile"><span>মোবাইল :</span> ০১৭০৮৪১০০০১ </p>
            <p class="phone"><span>ফোন (অফিস) :</span> ০১৭০৮ ৪১০০০১</p>
            <p class="email"><span>ইমেইল :</span> <a href="mailto:mozahid9705@gmail.com" title="mozahid9705@gmail.com">mozahid9705@gmail.com</a></p>
            <p class="fax"><span>ফ্যাক্স :</span> </p>
            <p class="batch"><span>ব্যাচ (বিসিএস) :</span> ২৫</p>
            <p class="joining_date"><span>বর্তমান কর্মস্থলে যোগদানের তারিখ :</span> 2020-01-06</p>
        </div>
    </div>
    <style>
        .glyphicon {
            margin-bottom: 10px;
            margin-right: 10px;
        }

        small {
            display: block;
            line-height: 1.428571429;
            color: #999;
        }

        .profile .photo {
            width: 20%;
            float: left
        }

        .profile .details {
            width: 80%;
            float: right
        }

        .profile .details hr {
            margin: 6px 0 10px
        }

        .profile .details span,
        .profile .details .name {
            font-weight: bold
        }

        .profile .details .email a {
            text-decoration: underline
        }

        @media only screen and (max-width: 800px) and (min-width: 320px) {
            .profile div {
                width: 100% !important
            }
        }

        .profile .photo img {
            width: 80%;
            height: 100%
        }
    </style>
    <script></script>
</div>
@endsection