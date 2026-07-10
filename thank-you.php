<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Thank You | SVIST</title>

<link rel="icon" href="assets/images/logo/favicon.webp">

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet">

<script>
tailwind.config = {
theme:{
extend:{
colors:{
primary:'#8C4426',
primaryDark:'#6B2F17',
secondary:'#2E384C',
accent:'#F6DFB3'
}
}
}
}
</script>

<style>

body{
background:#f8fafc;
}

.check{
animation:pop .7s ease;
}

@keyframes pop{

0%{
transform:scale(.2);
opacity:0;
}

80%{
transform:scale(1.15);
}

100%{
transform:scale(1);
}

}

</style>

</head>

<body>

<!-- Header -->

<header class="sticky top-0 bg-white shadow-md">

<div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">

<a href="index.php">

<img src="assets/images/logo/right-half-logo.png"
class="h-16"
alt="SVIST">

</a>

<a href="tel:+917003029267"
class="hidden md:flex items-center gap-3 border border-primary rounded-xl px-5 py-3 hover:bg-primary hover:text-white transition">

<i class="ri-phone-line text-2xl"></i>

<div>

<p class="font-bold">+91 70030 29267</p>

<p class="text-xs">Admission Assistance</p>

</div>

</a>

</div>

</header>



<section class="min-h-[88vh] bg-gradient-to-br from-[#FFF8F4] via-white to-[#F9F9F9] flex items-center justify-center px-5 py-12">

    <div class="bg-white rounded-[30px] shadow-2xl border border-gray-100 max-w-3xl w-full overflow-hidden">

        <!-- Top Banner -->
        <div class="bg-gradient-to-r from-[#8C4426] to-[#A85A37] py-10 px-8 text-center text-white">

            <div class="w-24 h-24 mx-auto rounded-full bg-white flex items-center justify-center check shadow-xl">

                <i class="ri-checkbox-circle-fill text-6xl text-green-600"></i>

            </div>

            <span class="inline-block mt-5 px-4 py-1 bg-green-500 rounded-full text-xs font-semibold uppercase tracking-wider">
                Application Received
            </span>

            <h1 class="text-4xl font-bold mt-5">
                Thank You!
            </h1>

            <p class="mt-4 text-white/90 text-lg">
                Your admission enquiry has been received successfully.
            </p>

        </div>

        <!-- Content -->
        <div class="p-10">

            <h2 class="text-2xl font-bold text-secondary text-center">
                What Happens Next?
            </h2>

            <div class="mt-8 space-y-6">

                <div class="flex items-start gap-4">

                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                        <i class="ri-check-line text-green-600 text-xl"></i>
                    </div>

                    <div>

                        <h4 class="font-semibold">Application Submitted</h4>

                        <p class="text-gray-500 text-sm">
                            We have successfully received your enquiry.
                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-4">

                    <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center">
                        <i class="ri-phone-line text-yellow-600 text-xl"></i>
                    </div>

                    <div>

                        <h4 class="font-semibold">
                            Admission Counsellor Will Contact You
                        </h4>

                        <p class="text-gray-500 text-sm">
                            Our expert will call you within 24 hours.
                        </p>

                    </div>

                </div>

                <div class="flex items-start gap-4">

                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="ri-book-open-line text-blue-600 text-xl"></i>
                    </div>

                    <div>

                        <h4 class="font-semibold">
                            Course Guidance
                        </h4>

                        <p class="text-gray-500 text-sm">
                            You'll receive course details, fee structure and scholarship information.
                        </p>

                    </div>

                </div>

            </div>

            <!-- Buttons -->

            <div class="flex flex-col md:flex-row gap-4 justify-center mt-10">

                <a href="index.php"
                   class="bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-xl font-semibold transition text-center">

                    <i class="ri-home-4-line"></i>

                    Back to Home

                </a>

                <a href="tel:+917003029267"
                   class="border border-primary text-primary hover:bg-primary hover:text-white px-8 py-4 rounded-xl font-semibold transition text-center">

                    <i class="ri-phone-line"></i>

                    Call Admission Team

                </a>

            </div>

            <div class="text-center mt-8 text-gray-500">

                Redirecting to Home in
                <span id="timer" class="font-bold text-primary">10</span>
                seconds...

            </div>

        </div>

    </div>

</section>

<script>

let sec=10;

let interval=setInterval(function(){

sec--;

document.getElementById("timer").innerHTML=sec;

if(sec==0){

clearInterval(interval);

window.location.href="index.php";

}

},1000);

</script>

</body>
</html>