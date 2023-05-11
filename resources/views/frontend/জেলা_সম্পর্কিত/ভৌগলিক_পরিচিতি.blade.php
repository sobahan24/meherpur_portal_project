@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | ভৌগলিক_পরিচিতি
@endsection

@section('contant')
<div id="printable_area">

    <h3>ভৌগলিক পরিচিতি</h3>
    <div>
        <p></p>
        <p>&nbsp;</p>

        <p><span style="font-size:16px"><strong>ভৌগলিক অবস্থানঃ</strong></span></p>

        <p><span style="font-size:14px"><span style="color:rgb(32, 33, 34); font-family:sans-serif">মেহেরপুর জেলা ২৩.৪৪° থেকে ২৩.৫৯° উত্তর অক্ষাংশ এবং ৮৮.৩৪° থেকে ৮৮.৫৩° পূর্ব দ্রাঘিমাংশের মধ্যে অবস্থিত।&nbsp;</span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:16px"><strong>ভৌগলিক সীমানাঃ&nbsp;</strong></span></p>

        <p><span style="font-size:14px"><span style="color:rgb(32, 33, 34); font-family:sans-serif">এটি বাংলাদেশের পশ্চিমাংশের সীমান্তবর্তী জেলা। এ জেলার উত্তরে কুষ্টিয়া জেলার&nbsp;</span><a href="https://bn.wikipedia.org/wiki/%E0%A6%A6%E0%A7%8C%E0%A6%B2%E0%A6%A4%E0%A6%AA%E0%A7%81%E0%A6%B0_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE,_%E0%A6%95%E0%A7%81%E0%A6%B7%E0%A7%8D%E0%A6%9F%E0%A6%BF%E0%A6%AF%E0%A6%BC%E0%A6%BE" style="text-decoration-line: none; color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;" title="দৌলতপুর উপজেলা">দৌলতপুর উপজেলা</a><span style="color:rgb(32, 33, 34); font-family:sans-serif">&nbsp;ও&nbsp;</span><a href="https://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A6%B6%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%AE%E0%A6%AC%E0%A6%99%E0%A7%8D%E0%A6%97" style="text-decoration-line: none; color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;" title="পশ্চিমবঙ্গ">পশ্চিমবঙ্গ</a><span style="color:rgb(32, 33, 34); font-family:sans-serif">&nbsp;(ভারত); দক্ষিণে চুয়াডাঙ্গা জেলার&nbsp;</span><a href="https://bn.wikipedia.org/wiki/%E0%A6%9C%E0%A7%80%E0%A6%AC%E0%A6%A8%E0%A6%A8%E0%A6%97%E0%A6%B0_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE" style="text-decoration-line: none; color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;" title="জীবননগর উপজেলা">জীবননগর উপজেলা</a><span style="color:rgb(32, 33, 34); font-family:sans-serif">&nbsp;,&nbsp;</span><a href="https://bn.wikipedia.org/wiki/%E0%A6%A6%E0%A6%BE%E0%A6%AE%E0%A7%81%E0%A6%A1%E0%A6%BC%E0%A6%B9%E0%A7%81%E0%A6%A6%E0%A6%BE_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE" style="text-decoration-line: none; color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;" title="দামুড়হুদা উপজেলা">দামুড়হুদা উপজেলা</a><span style="color:rgb(32, 33, 34); font-family:sans-serif">&nbsp;ও পশ্চিমবঙ্গ (ভারত); পূর্বে কুষ্টিয়া জেলার&nbsp;</span><a href="https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%BF%E0%A6%B0%E0%A6%AA%E0%A7%81%E0%A6%B0_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE" style="text-decoration-line: none; color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;" title="মিরপুর উপজেলা">মিরপুর উপজেলা</a><span style="color:rgb(32, 33, 34); font-family:sans-serif">&nbsp;, চুয়াডাঙ্গা জেলার&nbsp;</span><a href="https://bn.wikipedia.org/wiki/%E0%A6%86%E0%A6%B2%E0%A6%AE%E0%A6%A1%E0%A6%BE%E0%A6%99%E0%A7%8D%E0%A6%97%E0%A6%BE_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE" style="text-decoration-line: none; color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;" title="আলমডাঙ্গা উপজেলা">আলমডাঙ্গা উপজেলা</a><span style="color:rgb(32, 33, 34); font-family:sans-serif">&nbsp;, পশ্চিমে ভারতের&nbsp;</span><a href="https://bn.wikipedia.org/wiki/%E0%A6%AA%E0%A6%B6%E0%A7%8D%E0%A6%9A%E0%A6%BF%E0%A6%AE%E0%A6%AC%E0%A6%99%E0%A7%8D%E0%A6%97" style="text-decoration-line: none; color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif; font-size: 14px;" title="পশ্চিমবঙ্গ">পশ্চিমবঙ্গ</a><span style="color:rgb(32, 33, 34); font-family:sans-serif">।</span></span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:16px"><strong>ভূ-প্রকৃতিঃ</strong></span></p>

        <p><span style="font-size:14px">মেহেরপুর জেলার সমগ্র ভূ-ভাগ মৃত প্রায় ব-দ্বীপ সমভূমি এলাকা। এই এলাকার নদীগুলি দিয়ে খুব অল্প পরিমাণ পানি প্রবাহিত হয়। বর্ষা ঋতুতেও প্লাবিতহওয়ার মত পানি প্রবাহিত হয় না। ফলে নতুন পলল সঞ্চয়ের সুযোগ এখানে নেই। তবে নদীগুলির গতিপথ সর্পিল বলে মেহেরপুরে অনেক অশ্বক্ষুরাকৃতি হ্রদের (Ox bow Lake) সৃষ্টি হয়েছে।&nbsp;</span><span style="color:rgb(32, 33, 34); font-family:sans-serif; font-size:14px">বাংলাদেশের উচুতম জেলা গুলোর একটি হচ্ছে এ জেলা। সমুদ্রপৃষ্ঠ হতে এর গড় উচ্চতা ২১ মিটার।</span><span style="font-size:14px">&nbsp;</span><span style="color:rgb(32, 33, 34); font-family:sans-serif; font-size:14px">ভূসংস্থান অনুসারে এটি সমতলভূমিতে অবস্থিত হলেও উত্তর থেকে দক্ষিণ দিকে কিছুটা ঢালু।</span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:16px"><strong>মোট আয়তনঃ</strong>&nbsp;&nbsp;</span><span style="font-size:14px">৭১৬.০৮ বর্গকিলোমিটার।</span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:14px"><strong><span style="font-size:16px">প্রধান নদীঃ&nbsp;</span>&nbsp;</strong></span><span style="font-size:14px">ভৈরব, মাথাভাঙ্গা, ছেউটি, কাজলা, স্টুয়ার্ট&nbsp;খাল&nbsp;এবং&nbsp;মড়কা খাল।&nbsp; &nbsp;</span></p>

        <p>&nbsp;</p>

        <p><span style="font-size:16px"><strong>বার্ষিক গড় তাপমাত্রা:</strong></span></p>

        <p><span style="color:rgb(32, 33, 34); font-family:sans-serif; font-size:14px">বছরের অধিকাংশ সময়ই এখানে ক্রান্তীয় গরম এবং শুষ্ক আবহাওয়া বিরাজ করে। মেহেরপুরের গড় সর্বোচ্চ তাপমাত্রা ৩৭.১° সেলসিয়াস এবং সর্বনিম্ন তাপমাত্রা ১১.২° সেলসিয়াস। দেশের অন্যান্য অঞ্চলের মত এখানেও এপ্রিল থেকে জুন হল সবচেয়ে উষ্ণতম মাস এবং ডিসেম্বর থেকে জানুয়ারী হল সবচেয়ে শীতলতম মাস।</span></p>

        <p>&nbsp;</p>

        <p><strong><span style="font-size:16px">বার্ষিক গড় বৃষ্টিপাত:</span>&nbsp;</strong><span style="color:rgb(32, 33, 34); font-family:sans-serif; font-size:14px">&nbsp;১৪৬৭ মিলিমিটার।&nbsp;</span></p>

        <p>&nbsp;</p>

        <p><iframe height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229394.39904427456!2d88.5478044059393!3d23.78873824027778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f94a104fc1c02f%3A0xbac2303153cf2bb!2sMeherpur%20District!5e1!3m2!1sen!2sbd!4v1623337327112!5m2!1sen!2sbd" style="border:0;" width="600"></iframe></p>
        
    </div>
</div>
@endsection