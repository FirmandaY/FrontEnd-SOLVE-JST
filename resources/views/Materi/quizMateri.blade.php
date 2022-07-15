@extends('layouts.materiLayout')

@section('contentMateri')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="left: 2%; right: 5%;">

            <nav class="breadcrumb-container bc-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Geografi</li>
                </ol>
            </nav>

            <div class="col-md-12" style="left: 0.5%; right: 5%;">
                <div class="row">
                    <div class="col-xl-4 left-material-container" style="">
                        <div class="left-content-container">
                            <h4 class="materi-title">Daftar Materi</h4>
                            <div class="tab">
                                <!-- SETIAP BUTTON YANG ADA PADA SISI HALAMAN -->
                                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="button-number"><strong>1</strong></div>
                                            </div>
                                            <div class="col-md-10">
                                                <p class="course-title"><strong>London knxbhabbahb nxjkaba janxjkan janxa oanxu annxuah kahhx bub</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>


                                <button class="tablinks" onclick="openCity(event, 'Paris')">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="button-number"><strong>1</strong></div>
                                            </div>
                                            <div class="col-md-10">
                                                <p><strong>Paris knxbhabbahb nxjkaba janxjkan janxa oanxu annxuah kahhx bub</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>


                                <button class="tablinks" onclick="openCity(event, 'Tokyo')">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="button-number"><strong>1</strong></div>
                                            </div>
                                            <div class="col-md-10">
                                                <p><strong>Tokyo knxbhabbahb nxjkaba janxjkan janxa oanxu annxuah kahhx bub</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                
                            </div>
                        
                        </div>

                    </div>
                    <div class="col-xl-8 right-material-container">
                        <div class="right-content-container">
                            <p class="materi-title-content">Terain dan Topografi Kota London</p>

                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="col-md-11" style="background-color: white; margin-right: 5%; margin-left: 5%;">

                                        <!-- DIBAWAH INI ADALAH BAGIAN DARI JAVASCRIPT -->
                                        <div id="London" class="tabcontent">
                                            <!-- TAB PADA SECTION KANAN -->
                                            <input id="tab1" type="radio" name="tabs" checked>
                                            <label for="tab1">Materi</label>
                                                
                                            <input id="tab2" type="radio" name="tabs">
                                            <label for="tab2">File Materi</label>

                                            <section id="content1">
                                                <h3><strong>London in 4K</strong></h3>
                                                <p>London is the capital city of England.</p>
                                                
                                                <div class="materi-section">
                                                    <video class="materi-vid" controls>
                                                        <source src="{{ asset('videos/London-in-4K.mp4') }}" type="video/mp4">
                                                        Browser anda tidak mendukung pemutaran video, mohon upgrade!
                                                    </video>
                                                </div>

                                                <p> London adalah Ibukota Inggris atau Britania Raya. Kota ini terkenal dengan wisata terkenalnya yaitu Big Ben / Big Clock </p>
                                            
                                                <h4> Catatan </h4>
                                                <form> 
                                                    <textarea class="materi-note" placeholder="Catatan"></textarea>
                                                </form>
                                            
                                            </section>

                                            <section id="content2">
                                                <p>
                                                Beef ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
                                                </p>
                                                <p>
                                                Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
                                                </p>
                                            </section>

                                        </div>

                                        <div id="Paris" class="tabcontent">
                                            <h3>Paris</h3>
                                            <p>Paris is the capital of France.</p>
                                        </div>

                                        <div id="Tokyo" class="tabcontent">
                                            <h3>Tokyo</h3>
                                            <p>Tokyo is the capital of Japan.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- JAVA SCRIPT UNTUK MEMBUAT SIDE TABS -->
                        <script>

                            function openCity(evt, cityName) {
                                // Declare all variables
                                var i, tabcontent, tablinks;

                                // Get all elements with class="tabcontent" and hide them
                                tabcontent = document.getElementsByClassName("tabcontent");
                                for (i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }

                                // Get all elements with class="tablinks" and remove the class "active"
                                tablinks = document.getElementsByClassName("tablinks");
                                for (i = 0; i < tablinks.length; i++) {
                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                }

                                // Show the current tab, and add an "active" class to the link that opened the tab
                                document.getElementById(cityName).style.display = "block";
                                evt.currentTarget.className += " active";

                            }
                            // Get the element with id="defaultOpen" and click on it
                            document.getElementById("defaultOpen").click();

                        </script>

                    </div>
                   
                </div>
            </div>

        </div>
        
    </div>
    
</div>

@endsection
