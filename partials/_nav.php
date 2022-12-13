<div>
            <nav class="navbar navbar-expand-lg nav-tabs navbar-dark bg-secondary navbar1">
                <div class="container-fluid">
                    <a class="navbar-brand text-black fw-bold sitetextcolor">Simple News</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="dropdown nav-item">
                        <button class="btn btn-secondary dropdown-toggle nav-link text-black fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              NEWS
                            </button>
                            <ul class="dropdown-menu">
                            <li class="nav-item">
                              <a class="nav-link text-black fw-bold" aria-current="page" href="news.php" id="headlines">Headlines</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" aria-current="page" href="#general" id="general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" aria-current="page" href="#business" id="business" >Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#sports" id="sport">Sports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" aria-current="page" href="#tehnology" id="technology">Technology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black fw-bold" href="#entertainment" id="entertainment">Entertainment</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-black fw-bold" href="#stocks" id="stocks">Stocks</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-black fw-bold" href="#crypto" id="crypto">Crypto</a>
                        </li>
                        </ul>
                        </div>
                        <div class="dropdown nav-item">
                            <button class="btn btn-secondary dropdown-toggle nav-link text-black fw-bold" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Country
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button" value="ae" class="country" onclick="fetchHeadlines(event)">United Arab Emirates</button></li>
                                <li><button class="dropdown-item" type="button" value="ar" class="country" onclick="fetchHeadlines(event)">Argentina</button></li>
                                <li><button class="dropdown-item" type="button" value="at" class="country" onclick="fetchHeadlines(event)">Austria</button></li>
                                <li><button class="dropdown-item" type="button" value="au" class="country" onclick="fetchHeadlines(event)">Australia</button></li>
                                <li><button class="dropdown-item" type="button" value="be" class="country" onclick="fetchHeadlines(event)">Belgium</button></li>
                                <li><button class="dropdown-item" type="button" value="bg" class="country" onclick="fetchHeadlines(event)">Bulgaria</button></li>
                                <li><button class="dropdown-item" type="button" value="br" class="country" onclick="fetchHeadlines(event)">Brazil</button></li>
                                <li><button class="dropdown-item" type="button" value="ca" class="country" onclick="fetchHeadlines(event)">Canada</button></li>
                                <li><button class="dropdown-item" type="button" value="ch" class="country" onclick="fetchHeadlines(event)">Switzerland</button></li>
                                <li><button class="dropdown-item" type="button" value="cn" class="country" onclick="fetchHeadlines(event)">China</button></li>
                                <li><button class="dropdown-item" type="button" value="co" class="country" onclick="fetchHeadlines(event)">Colombia</button></li>
                                <li><button class="dropdown-item" type="button" value="cu" class="country" onclick="fetchHeadlines(event)">Cuba</button></li>
                                <li><button class="dropdown-item" type="button" value="cz" class="country" onclick="fetchHeadlines(event)">Czechia</button></li>
                                <li><button class="dropdown-item" type="button" value="de" class="country" onclick="fetchHeadlines(event)">Germany</button></li>
                                <li><button class="dropdown-item" type="button" value="eg" class="country" onclick="fetchHeadlines(event)">Egypt</button></li>
                                <li><button class="dropdown-item" type="button" value="fr" class="country" onclick="fetchHeadlines(event)">France</button></li>
                                <li><button class="dropdown-item" type="button" value="gb" class="country" onclick="fetchHeadlines(event)">United Kingdom</button></li>
                                <li><button class="dropdown-item" type="button" value="gr" class="country" onclick="fetchHeadlines(event)">Greece</button></li>
                                <li><button class="dropdown-item" type="button" value="hk" class="country" onclick="fetchHeadlines(event)">Hong Kong</button></li>
                                <li><button class="dropdown-item" type="button" value="hu" class="country" onclick="fetchHeadlines(event)">Hungary</button></li>
                                <li><button class="dropdown-item" type="button" value="id" class="country" onclick="fetchHeadlines(event)">Indonesia</button></li>
                                <li><button class="dropdown-item" type="button" value="ie" class="country" onclick="fetchHeadlines(event)">Ireland</button></li>
                                <li><button class="dropdown-item" type="button" value="il" class="country" onclick="fetchHeadlines(event)">Israel</button></li>
                                <li><button class="dropdown-item" type="button" value="in" class="country" onclick="fetchHeadlines(event)">India</button></li>
                                <li><button class="dropdown-item" type="button" value="it" class="country" onclick="fetchHeadlines(event)">Italy</button></li>
                                <li><button class="dropdown-item" type="button" value="lv" class="country" onclick="fetchHeadlines(event)">Lao People's Democratic Republic</button></li>
                                <li><button class="dropdown-item" type="button" value="ma" class="country" onclick="fetchHeadlines(event)">Morocco</button></li>
                                <li><button class="dropdown-item" type="button" value="mx" class="country" onclick="fetchHeadlines(event)">Mexico</button></li>
                                <li><button class="dropdown-item" type="button" value="my" class="country" onclick="fetchHeadlines(event)">Malaysia</button></li>
                                <li><button class="dropdown-item" type="button" value="ng" class="country" onclick="fetchHeadlines(event)">Nigeria</button></li>
                                <li><button class="dropdown-item" type="button" value="nl" class="country" onclick="fetchHeadlines(event)">Netherlands</button></li>
                                <li><button class="dropdown-item" type="button" value="no" class="country" onclick="fetchHeadlines(event)">Norway</button></li>
                                <li><button class="dropdown-item" type="button" value="nz" class="country" onclick="fetchHeadlines(event)">New Zealand</button></li>
                                <li><button class="dropdown-item" type="button" value="ph" class="country" onclick="fetchHeadlines(event)">Pitcairn</button></li>
                                <li><button class="dropdown-item" type="button" value="pl" class="country" onclick="fetchHeadlines(event)">Poland</button></li>
                                <li><button class="dropdown-item" type="button" value="pt" class="country" onclick="fetchHeadlines(event)">Portugal</button></li>
                                <li><button class="dropdown-item" type="button" value="ro" class="country" onclick="fetchHeadlines(event)">Romania</button></li>
                                <li><button class="dropdown-item" type="button" value="rs" class="country" onclick="fetchHeadlines(event)">Republic of Serbia</button></li>
                                <li><button class="dropdown-item" type="button" value="ru" class="country" onclick="fetchHeadlines(event)">Russia</button></li>
                                <li><button class="dropdown-item" type="button" value="sa" class="country" onclick="fetchHeadlines(event)">Saudi Arabia</button></li>
                                <li><button class="dropdown-item" type="button" value="se" class="country" onclick="fetchHeadlines(event)">Sweden</button></li>
                                <li><button class="dropdown-item" type="button" value="si" class="country" onclick="fetchHeadlines(event)">Slovenia</button></li>
                                <li><button class="dropdown-item" type="button" value="sk" class="country" onclick="fetchHeadlines(event)">Slovakia</button></li>
                                <li><button class="dropdown-item" type="button" value="th" class="country" onclick="fetchHeadlines(event)">Thailand</button></li>
                                <li><button class="dropdown-item" type="button" value="tr" class="country" onclick="fetchHeadlines(event)">Türkiye</button></li>
                                <li><button class="dropdown-item" type="button" value="tw" class="country" onclick="fetchHeadlines(event)">Taiwan</button></li>
                                <li><button class="dropdown-item" type="button" value="ua" class="country" onclick="fetchHeadlines(event)">Ukraine</button></li>
                                <li><button class="dropdown-item" type="button" value="us" class="country" onclick="fetchHeadlines(event)">United States of America</button></li>
                                <li><button class="dropdown-item" type="button" value="ve" class="country" onclick="fetchHeadlines(event)">Venezuela</button></li>
                                <li><button class="dropdown-item" type="button" value="za" class="country" onclick="fetchHeadlines(event)">South Africa</button></li>
                              
                            </ul>

                          </div>
                          <input class="m-1 nav link" type="date" id="datePickerId1" onchange="date1()">
                          <p class="m-2 text-black fw-bold">to</p>
                          <input class="m-1 nav link" type="date" id="datePickerId">
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2 text-center" type="text" id="newsQuery" placeholder="Search news">
                            <button class="btn btn-outline-dark text-black fw-bold" type="button" id="searchBtn">Search</button>
                        </form>
                        <button><a class="btn btn-outline-dark text-black fw-bold" href="user.php">Profile</a></button>
                        
                    </div>
                </div>
                
            </nav>
        </div>
