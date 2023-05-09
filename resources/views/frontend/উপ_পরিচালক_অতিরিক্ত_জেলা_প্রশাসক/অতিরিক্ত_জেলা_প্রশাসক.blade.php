@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | অতিরিক্ত জেলা প্রশাসক (রাজস্ব)
@endsection

@section('contant')
<div id="printable_area">
    <h4>
        অতিরিক্ত জেলা প্রশাসক (রাজস্ব)</h4>
    <div id="vtab">
        <ul>
            <li class="">প্রোফাইল</li>
            <li class="selected button">দায়িত্বপ্রাপ্ত শাখাসমূহ</li>
        </ul>
        <div class="row" style="display: none;">
            <h4>প্রোফাইল</h4>
            <ul>
                <li>
                    <h5><a href="#" title="জনাব লিংকন বিশ্বাস">জনাব লিংকন বিশ্বাস</a></h5><br>
                    <p><img style="max-width:700px;" src="//www.meherpur.gov.bd/sites/default/files/files/www.meherpur.gov.bd/officer_list/dbb2d2ed_911c_4afe_ba40_7a70d5a5844d/b5227a31f55ebc831026c52e742dae6a.png" alt="b5227a31f55ebc831026c52e742dae6a" width="200" height="240"></p>
                </li>
            </ul>
        </div>
        <div class="row" style="display: block;">
            <h4>দায়িত্বপ্রাপ্ত শাখাসমূহ</h4>
            <ul>

                <li><a href="#" title="ভূমি অধিগ্রহণ শাখা">ভূমি অধিগ্রহণ শাখা</a></li>
                <li><a href="#" title="রাজস্ব শাখা">রাজস্ব শাখা</a></li>
                <li><a href="#" title="রেকর্ডরুম ">রেকর্ডরুম </a></li>
                <li><a href="#" title="জেনারেল সার্টিফিকেট শাখা">জেনারেল সার্টিফিকেট শাখা</a></li>
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