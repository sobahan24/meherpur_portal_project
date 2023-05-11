@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | হাটবাজার
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images/print_btn.png')}}" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>
        হাট-বাজারের-তালিকা
    </h3>

    <table class="bordered" style="text-align: center;">
        <tbody>
            <tr style="font-weight: bold;">
                <td>ক্রমিক</td>
                <td>নাম</td>
                <td>আয়তন</td>
                <td>তথ্য প্রদানকারী ব্যক্তি</td>
                <td>চান্দিনা ভিটির সংখ্যা</td>
                <td>ইজারা মূল্য</td>
                <td>ঠিকানা</td>
            </tr>
            <tr>
                <td>১</td>
                <td><a href="#" title="পৌর পশু হাট">পৌর পশু হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৫৫,৫২,০০০/-</td>
                <td></td>
            </tr>
            <tr>
                <td>২</td>
                <td><a href="#" title="বড় বাজার">বড় বাজার</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৩০,০২,০০০/-</td>
                <td>বড়বাজার,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>৩</td>
                <td><a href="#" title="শাহ আলম মার্কেট">শাহ আলম মার্কেট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৬৫,০০০/-</td>
                <td>মেহেরপুর</td>
            </tr>
            <tr>
                <td>৪</td>
                <td><a href="#" title="বাঁশবাড়ীয়া হাট">বাঁশবাড়ীয়া হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৪০,৫০০/-</td>
                <td>গাংনী</td>
            </tr>
            <tr>
                <td>৫</td>
                <td><a href="#" title="পশু হাট ">পশু হাট </a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৪,৫১,০০০/-</td>
                <td>গাংনী,মেহেরপুর</td>
            </tr>
            <tr>
                <td>৬</td>
                <td><a href="#" title="জবেহ খানা	">জবেহ খানা </a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>২৬,৬০০/-</td>
                <td>গাংনী,মেহেরপুর</td>
            </tr>
            <tr>
                <td>৭</td>
                <td><a href="#" title="শোলমারী হাট	">শোলমারী হাট </a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>২২,৭০০/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>৮</td>
                <td><a href="#" title="কুলবাড়িয়া হাট	">কুলবাড়িয়া হাট </a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>১৯,০০০/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>৯</td>
                <td><a href="#" title="উজলপুর">উজলপুর</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৬,৯০০/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>১০</td>
                <td><a href="#" title="বুড়িপোতা হাট">বুড়িপোতা হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>১৪৬/--</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>১১</td>
                <td><a href="#" title="রাজাপুর হাট">রাজাপুর হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৩৩/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>১২</td>
                <td><a href="#" title="শালিকা হাট">শালিকা হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>৪৩০০/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>১৩</td>
                <td><a href="#" title="বাড়ীবাঁকা হাট">বাড়ীবাঁকা হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>১৪৪/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>১৪</td>
                <td><a href="#" title="আমঝুপি হাট">আমঝুপি হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>১,৪০,১০৫/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>১৫</td>
                <td><a href="#" title="শ্যামপুর হাট">শ্যামপুর হাট</a></td>
                <td></td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td></td>
                <td>২৬,০০০/-</td>
                <td>মেহেরপুর সদর,মেহেরপুর।</td>
            </tr>
            <tr>
                <td>১৬</td>
                <td><a href="#" title="কোমরপুর হাট">কোমরপুর হাট</a></td>
                <td>২২০০ বর্গফুট</td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td>২ টি</td>
                <td>৮৫০০০/-</td>
                <td>কোমরপুর বাজার, মুজিবনগর, মেহেরপুর</td>
            </tr>
            <tr>
                <td>১৭</td>
                <td><a href="#" title="মহাজনপুর হাট">মহাজনপুর হাট</a></td>
                <td>২০০০ বর্গফুট</td>
                <td>

                    <a href="//" title=""></a>
                </td>
                <td>২টি</td>
                <td>৪০০০০/-</td>
                <td>মহাজনপুর, মুজিবনগর, মেহেরপুর</td>
            </tr>
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