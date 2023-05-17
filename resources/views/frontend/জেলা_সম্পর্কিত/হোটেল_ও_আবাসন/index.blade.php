@extends('layouts.frontend')

@section('title')
মেহেরপুর | হোটেল ও আবাসনের তালিকা
@endsection

@section('contant')

<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>
        মেহেরপুর জেলার হোটেল ও আবাসনের তালিকা
    </h3>

    @can('add')
    <a href="{{ url('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন/add-new') }}" class="btn-edit" style="float:right; color:#fff; margin-bottom:4px">এড নিউ ডাটা</a>
    @endcan
    <table class="table table-advanced" style="text-align: center;">
        <!-- <h4 style="background: #b9b3b326; padding: 5px 2px; margin-top: 45px; font-weight:bold">হোটেল ও আবাসনের ধরণ: সরকারী</h4> -->
        <thead style="font-weight: bold;">
            <tr>
                <td class="td_bold">ক্রমিক</td>
                <td class="td_bold">নাম</td>
                <td class="td_bold">পরিচালনাকারীর নাম</td>
                <td class="td_bold">ঠিকানা</td>
                <td class="td_bold">মোবাইল</td>
                @can('status')
                <td class="td_bold">স্ট্যাটাস</td>
                @endcan
                <td class="td_bold">একশন</td>

            </tr>
        </thead>
        <tbody>
            @foreach($hotelAbashan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->ownerName }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->mobile }}</td>
                @can('status')
                <td>{{ ($item->status == '0') ? 'Hided' : 'Displayed' }}</td>
                @endcan
                <td>
                    <a href="{{ url('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন/'.$item->name.'/'.$item->id) }}" class="btn-view" style="color:#fff" target="_blank">বিস্তারিত</a>
                    @can('edit')
                    <a href="{{ url('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন/edit/'.$item->name.'/'.$item->id) }}" class="btn-edit" style="color:#fff">এডিট</a>
                    @endcan
                    @can('delete')
                    <a href="{{ url('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন/'.$item->id) }}" class="btn-delete" style="color:#fff">ডিলেট</a>
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