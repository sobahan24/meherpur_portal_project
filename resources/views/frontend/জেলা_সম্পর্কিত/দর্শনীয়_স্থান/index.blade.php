@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | দর্শনীয় স্থান
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>
        দর্শনীয় স্থানের তালিকা
    </h3>
    @can('add')
        <a href="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/add-new') }}" class="btn-edit" style="float:right; color:#fff; margin-bottom:4px">এড নিউ ডাটা</a>
    @endcan
    <table class="table table-advanced" style="text-align: center;">
        <thead style="font-weight: bold;">
            <tr>
                <td>ক্রমিক নং</td>
                <td>স্থানের নাম</td>
                @can('status')
                    <td>স্ট্যাটাস</td>
                @endcan
                <td>একশন</td>
            </tr>
        </thead>
        <tbody>
            @foreach($touristSpot as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                @can('status')
                    <td>{{ ($item->status == '0') ? 'Hided' : 'Displayed' }}</td>
                @endcan
                <td>
                    <a href="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/'.$item->name.'/'.$item->id) }}" class="btn-view" style="color:#fff" target="_blank">বিস্তারিত</a>
                    @can('edit')
                        <a href="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/edit/'.$item->name.'/'.$item->id) }}" class="btn-edit" style="color:#fff">এডিট</a>
                    @endcan
                    @can('delete')
                        <a href="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/'.$item->id) }}" class="btn-delete" style="color:#fff">ডিলেট</a>
                    @endcan
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
