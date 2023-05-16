@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | মুক্তিযোদ্ধাদের তালিকা
@endsection

@section('contant')

<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>
        মেহেরপুর জেলার সকল মুক্তিযোদ্ধাদের তালিকা
    </h3>

    <a href="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব/add-new') }}" class="btn-edit" style="float:right; color:#fff; margin-bottom:4px">এড নিউ ডাটা</a>

    
 
    <table class="table table-advanced" style="text-align: center;">
        <thead style="font-weight: bold;">
            <tr>
                <td>ক্রমিক</td>
                <td>নাম</td>
                <td>উপজেলা</td>
                <td>একশন</td>
            </tr>
        </thead>
        <tbody>
            @foreach($muktizoddha as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->upozila }}</td>
                <td>
                    <a href="{{ url('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা/'.$item->name.'/'.$item->id) }}" class="btn-view" style="color:#fff" target="_blank">বিস্তারিত</a>
                    <a href="{{ url('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা/edit/'.$item->name.'/'.$item->id) }}" class="btn-edit" style="color:#fff">এডিট</a>
                    <a href="{{ url('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা/'.$item->id) }}" class="btn-delete" style="color:#fff">ডিলেট</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



<script type="text/javascript">
    function print_content() {
        var html_content = $("#printable_area").html();

        newwindow = window.open();
        newdocument = newwindow.document;
        newdocument.write(html_content);
        newdocument.close();

        newwindow.print();

        return false;
    }
</script>
@endsection
