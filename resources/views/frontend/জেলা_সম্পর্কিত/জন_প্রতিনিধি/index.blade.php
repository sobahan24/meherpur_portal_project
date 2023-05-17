@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | জন প্রতিনিধি
@endsection

@section('contant')

<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>
        মেহেরপুর জেলার সকল জন প্রতিনিধি
    </h3>

    @can('add')
        <a href="{{ url('/জেলা-সম্পর্কিত/জন-প্রতিনিধি/add-new') }}" class="btn-edit" style="float:right; color:#fff; margin-bottom:4px">এড নিউ ডাটা</a>
    @endcan


    <table class="table table-advanced" style="text-align: center;">
        <thead style="font-weight: bold;">
            <tr>
                <td>ক্রমিক</td>
                <td>নাম</td>
                <td>পদবি</td>
                <td>মোবাইল</td>
                <td>ই-মেইল</td>
                @can('status')
                    <td>স্ট্যাটাস</td>
                @endcan
                @can('add')
                <td>একশন</td>
                @endcan

            </tr>
        </thead>
        <tbody>
            @foreach($protinidhi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->padobi }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->email }}</td>
                @can('status')
                    <td>{{ ($item->status == '0') ? 'Hided' : 'Displayed' }}</td>
                @endcan
                <td>
                    @can('edit')
                        <a href="{{ url('/জেলা-সম্পর্কিত/জন-প্রতিনিধি/edit/'.$item->name.'/'.$item->id) }}" class="btn-edit" style="color:#fff">এডিট</a>
                    @endcan
                    @can('delete')
                        <a href="{{ url('/জেলা-সম্পর্কিত/জন-প্রতিনিধি/'.$item->id) }}" class="btn-delete" style="color:#fff">ডিলেট</a>
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
