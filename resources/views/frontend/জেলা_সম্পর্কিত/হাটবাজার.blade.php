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

    <table class="bordered">
        <tbody>
            <tr>
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
                <td><a target="_blank" href="/site/hatbazar/65fb8bc8-1c3a-11e7-8f57-286ed488c766/" title="পৌর পশু হাট">পৌর পশু হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb8c3e-1c3a-11e7-8f57-286ed488c766/" title="বড় বাজার">বড় বাজার</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb8cbb-1c3a-11e7-8f57-286ed488c766/" title="শাহ আলম মার্কেট">শাহ আলম মার্কেট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb8db0-1c3a-11e7-8f57-286ed488c766/" title="বাঁশবাড়ীয়া হাট">বাঁশবাড়ীয়া হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb90e3-1c3a-11e7-8f57-286ed488c766/" title="পশু হাট ">পশু হাট </a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb916c-1c3a-11e7-8f57-286ed488c766/" title="জবেহ খানা	">জবেহ খানা </a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb91e7-1c3a-11e7-8f57-286ed488c766/" title="শোলমারী হাট	">শোলমারী হাট </a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb9269-1c3a-11e7-8f57-286ed488c766/" title="কুলবাড়িয়া হাট	">কুলবাড়িয়া হাট </a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb92e7-1c3a-11e7-8f57-286ed488c766/" title="উজলপুর">উজলপুর</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb9365-1c3a-11e7-8f57-286ed488c766/" title="বুড়িপোতা হাট">বুড়িপোতা হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb93e4-1c3a-11e7-8f57-286ed488c766/" title="রাজাপুর হাট">রাজাপুর হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb945c-1c3a-11e7-8f57-286ed488c766/" title="শালিকা হাট">শালিকা হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb960a-1c3a-11e7-8f57-286ed488c766/" title="বাড়ীবাঁকা হাট">বাড়ীবাঁকা হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb9698-1c3a-11e7-8f57-286ed488c766/" title="আমঝুপি হাট">আমঝুপি হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/65fb971c-1c3a-11e7-8f57-286ed488c766/" title="শ্যামপুর হাট">শ্যামপুর হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/6607c64b-1c3a-11e7-8f57-286ed488c766/" title="কোমরপুর হাট">কোমরপুর হাট</a></td>
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
                <td><a target="_blank" href="/site/hatbazar/6607c6e3-1c3a-11e7-8f57-286ed488c766/" title="মহাজনপুর হাট">মহাজনপুর হাট</a></td>
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