@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | প্রখ্যাত ব্যক্তিত্ব
@endsection

@section('contant')

<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>
        মেহেরপুর জেলার প্রখ্যাত ব্যক্তিত্ব
    </h3>

    <a href="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব/add-new') }}" class="btn-edit" style="float:right; color:#fff; margin-bottom:4px">এড নিউ ডাটা</a>

    

    <table class="table table-advanced" style="text-align: center;">
        <thead style="font-weight: bold;">
            <tr>
                <td>ক্রমিক</td>
                <td>নাম</td>
                <td>জন্ম তারিখ</td>
                <td>মৃত্যু তারিখ</td>
                <td>একশন</td>
            </tr>
        </thead>
        <tbody>
            @foreach($famousPerson as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->birthday }}</td>
                <td>{{ $item->dieDay }}</td>
                <td>
                    <a href="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব/'.$item->name.'/'.$item->id) }}" class="btn-view" style="color:#fff" target="_blank">বিস্তারিত</a>
                    <a href="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব/edit/'.$item->name.'/'.$item->id) }}" class="btn-edit" style="color:#fff">এডিট</a>
                    <a href="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব/'.$item->id) }}" class="btn-delete" style="color:#fff">ডিলেট</a>
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