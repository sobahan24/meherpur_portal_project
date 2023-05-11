@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি)
@endsection

@section('contant')
<div id="printable_area">
    <h4>
        অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি)</h4>
    <div id="vtab">
        <ul>
            <li class="selected button">প্রোফাইল</li>
            <li class="">দায়িত্বপ্রাপ্ত শাখাসমূহ</li>
        </ul>
        <div class="row" style="display: block;">
            <h4>প্রোফাইল</h4>
            <ul>
                <li>
                    <h5><a href="#" title="জনাব লিউজা-উল-জান্নাহ">জনাব লিউজা-উল-জান্নাহ</a></h5><br>
                    <p><img style="max-width:700px;" src="{{ asset('frontend/images/officer_list/লিউজা-উল-জান্নাহ.png') }}" alt="লিউজা-উল-জান্নাহ.png" width="200" height="240"></p>
                </li>
            </ul>
        </div>
        <div class="row" style="display: none;">
            <h4>দায়িত্বপ্রাপ্ত শাখাসমূহ</h4>
            <ul>

                <li><a href="#" title="ফ্রন্ট ডেক্স ও জেলা ই-সেবা কেন্দ্র">ফ্রন্ট ডেক্স ও জেলা ই-সেবা কেন্দ্র</a></li>
                <li><a href="#" title="আইসিটি শাখা">আইসিটি শাখা</a></li>
                <li><a href="#" title="লাইব্রেরী শাখা">লাইব্রেরী শাখা</a></li>
                <li><a href="#" title="প্রবাসী কল্যাণ শাখা">প্রবাসী কল্যাণ শাখা</a></li>
                <li><a href="#" title="শিক্ষা শাখা ">শিক্ষা শাখা </a></li>
                <li><a href="#" title="তথ্য ও অভিযোগ সেল">তথ্য ও অভিযোগ সেল</a></li>
            </ul>
        </div>
    </div>
    <style>
        #vtab {
            margin: auto;
            width: 100%;
            height: auto;
        }

        #vtab>div>table {
            clear: none !important;
        }

        #vtab>ul>li {
            list-style-type: none;
            display: block;
            margin: auto;
            padding: 10px;
            border-bottom: 2px solid #fafafa;
            position: relative;
            background-color: white !important;
            cursor: pointer;
        }

        #vtab>ul>li.selected {
            border-right: none;
            background-color: white !important;
            position: relative;
            font-weight: bold;
            text-shadow: none;
        }

        #vtab>ul {
            float: left;
            width: 200px;
            text-align: left;
            display: block;
            margin: auto 0;
            padding: 0;
            position: relative;
            border: 1px solid #ddd;
        }

        #vtab>div {
            margin-left: 200px;
            border: 1px solid #ddd;
            min-height: 500px;
            padding: 12px;
            position: relative;
        }

        #vtab>div>h4 {
            font-size: 1.2em;
            border-bottom: 1px dashed gray;
            padding-top: 5px;
            margin-top: 0;
        }

        #vtab>ul>li.selected {
            border-right: 1px solid #fff !important;
        }

        #vtab>ul>li {
            border-right: 1px solid #ddd !important;
        }

        #vtab>div {
            left: 1px;
        }
    </style>
    <script>
        var $items = $('#vtab>ul>li');
        $items.click(function() {
            $items.removeClass('selected button');
            $(this).addClass('selected button');
            var index = $items.index($(this));
            $('#vtab>div').hide().eq(index).show();
            $('#vtab>div').find('h4').eq(index).html($(this).html());
        }).eq(0).click();
    </script>
</div>
@endsection