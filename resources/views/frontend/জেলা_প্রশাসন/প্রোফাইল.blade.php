@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | জেলা প্রশাসকের প্রোফাইল
@endsection

@section('contant')
<div id="printable_area" style="margin-top: 50px;">
    <div class="profile">

        <div class="photo">
            <img style="max-width:700px;" src="//www.meherpur.gov.bd/sites/default/files/files/meherpur.gov.bd/officer_list/d8bb181e_1c4b_11e7_8f57_286ed488c766/8d98af2cb67c6ca594e64abe8a81dbd5.png" alt="8d98af2cb67c6ca594e64abe8a81dbd5" width="" height="">
        </div>
        <div class="details">
            <h4 class="name">জনাব মোহাম্মদ আজিজুল ইসলাম</h4>
            <p class="designation">জেলাপ্রশাসক ও জেলা ম্যাজিস্ট্রেট</p>
            <hr>
            <p class="mobile"><span>মোবাইল :</span> ০১৭০৮৪১০০০০</p>
            <p class="phone"><span>ফোন (অফিস) :</span> ০২৪৭৭৭৯২৩০১, ০২৪৭৭৭৯২৩০৩</p>
            <p class="email"><span>ইমেইল :</span> <a href="mailto:dcmeherpur@mopa.gov.bd" title="dcmeherpur@mopa.gov.bd">dcmeherpur@mopa.gov.bd</a></p>
            <p class="fax"><span>ফ্যাক্স :</span> অফিস ০২৪৭৭৭৯২৫৩৪, বাসা ০২৪৭৭৭৯২৩৯৯</p>
            <p class="batch"><span>ব্যাচ (বিসিএস) :</span> ২৫</p>
            <p class="joining_date"><span>বর্তমান কর্মস্থলে যোগদানের তারিখ :</span> 2023-04-03</p>
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