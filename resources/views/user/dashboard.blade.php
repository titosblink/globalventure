@include('user.header') 
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>

                    <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                          {
                          "symbols": [
                            {
                              "proName": "FX_IDC:EURUSD",
                              "title": "EUR/USD"
                            },
                            {
                              "proName": "BITSTAMP:BTCUSD",
                              "title": "Bitcoin"
                            },
                            {
                              "proName": "BITSTAMP:ETHUSD",
                              "title": "Ethereum"
                            },
                            {
                              "description": "BTC/USDT",
                              "proName": "BINANCE:BTCUSDT"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:ETHUSDT"
                            },
                            {
                              "description": "BTCUSDTPERP",
                              "proName": "BINANCE:BTCUSDTPERP"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:SOLUSDT"
                            },
                            {
                              "description": "",
                              "proName": "COINBASE:ETHUSD"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:ADAUSDT"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:AVAXUSDT"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:SANDUSDT"
                            },
                            {
                              "description": "",
                              "proName": "BITMEX:XBTUSD"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:ATOMUSDT"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:GMTUSDTPERP"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:STORJUSDT"
                            },
                            {
                              "description": "",
                              "proName": "BINANCE:GALAUSDT"
                            }
                          ],
                          "showSymbolLogo": true,
                          "colorTheme": "light",
                          "isTransparent": true,
                          "displayMode": "regular",
                          "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
                <!-- Navigation Menu Ends -->
            </header>

            <!-- Header Ends -->

            <!-- Slider Starts -->

            <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators Starts -->

                <ol class="carousel-indicators visible-lg visible-md">
                    <li data-target="#main-slide" data-slide-to="0" class="active"></li>

                    <li data-target="#main-slide" data-slide-to="1"></li>

                    <li data-target="#main-slide" data-slide-to="2"></li>
                </ol>

                <!-- Indicators Ends -->

                <!-- Carousel Inner Starts -->

                <div class="carousel-inner">
                    <!-- Carousel Item Starts -->

                    <div class="item active bg-parallax item-1">
                        <div class="slider-content">
                            <div class="container">
                                <div class="slider-text text-center">
                                    <h3 class="slide-title">
                                        <span>Secure</span> and <span>Easy Way</span><br />
                                        To Bitcoin Investing
                                    </h3>

                                    <p>
                                        <a href="about.html" class="slider btn btn-primary">Learn more</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Item Ends -->

                    <!-- Carousel Item Starts -->

                    <div class="item bg-parallax item-2">
                        <div class="slider-content">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="slider-text text-center">
                                        <h3 class="slide-title">
                                            <span>Bitcoin</span> Investment <br />
                                            You can

                                            <span>Trust</span>
                                        </h3>

                                        <p>
                                            <a href="/pricing" class="slider btn btn-primary">our prices</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Item Ends -->
                </div>

                <!-- Carousel Inner Ends -->

                <!-- Carousel Controlers Starts -->

                <a class="left carousel-control" href="/" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>

                <a class="right carousel-control" href="/" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>

                <!-- Carousel Controlers Ends -->
            </div>

            <!-- Slider Ends -->

            <!-- Features Section Starts -->

        <a href="{{URL::asset('/accounts')}}">
            <section class="features">
                <div class="container">
                    <div class="row features-row">
                        <!-- Feature Box Starts -->

                        <div class="feature-box col-md-4 col-sm-12">
                            <span class="feature-icon">
                                <img src="images/icons/green/download-bitcoin.png" alt="download bitcoin" />
                            </span>

                            <div class="feature-box-content">
                                <h3>Create Bitcoin Wallet Now</h3>

                                <p>Join us today and get full access to your wallet. Send and receive bitcoin with it Global Investment BTC Wallet</p>
                            </div>
                        </div>

                        <!-- Feature Box Ends -->

                        <!-- Feature Box Starts -->

                        <div class="feature-box two col-md-4 col-sm-12">
                            <span class="feature-icon">
                                <img src="images/icons/green/add-bitcoins.png" alt="add bitcoins" />
                            </span>

                            <div class="feature-box-content">
                                <h3>Add coins to your Wallet</h3>

                                <p>Add bitcoins to your wallet and start earning handsomely.</p>
                            </div>
                        </div>

                        <!-- Feature Box Ends -->

                        <!-- Feature Box Starts -->

                        <div class="feature-box three col-md-4 col-sm-12">
                            <span class="feature-icon">
                                <img src="images/icons/green/buy-sell-bitcoins.png" alt="buy and sell bitcoins" />
                            </span>

                            <div class="feature-box-content">
                                <h3>Deposit/send with your Wallet</h3>

                                <p>Montor your deposits into your wallet. Enter receiver's address, specify the amount and send.</p>
                            </div>
                        </div>

                        <!-- Feature Box Ends -->
                    </div>
                </div>
            </section>
        </a>

            <!-- Features Section Ends -->

            <!-- About Section Starts -->

            <section class="about-us">
                <div class="container">
                    <!-- Section Title Starts -->

                    <div class="row text-center">
                        <h2 class="title-head">About <span>Us</span></h2>

                        <div class="title-head-subtitle">
                            <p>Undoubtedly the best bitcoin investment company. Tested and Trusted by top players in the markets.</p>
                        </div>
                    </div>

                    <!-- Section Title Ends -->

                    <!-- Section Content Starts -->

                    <div class="row about-content">
                        <!-- Image Starts -->

                        <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                            <img class="img-responsive img-about-us" src="images/about-us.png" alt="about us" />
                        </div>

                        <!-- Image Ends -->

                        <!-- Content Starts -->

                        <div class="col-sm-12 col-md-7 col-lg-6">
                            <h3 class="title-about">WE ARE GLOBAL</h3>

                            <p class="about-text">
                                A place for everyone who wants to simply join the elites in Bitcoins. Deposit your bitcoin into your Global Investment custom wallet and start earning immediately. Instant buy/sell of Bitcoins at fair price is
                                guaranteed. Nothing extra. Join over 700,000 users from all over the world satisfied with our services.
                            </p>

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>

                                <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>

                                <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active">
                                    <p>Bitcoin is based on a protocol known as the blockchain, which allows to create, transfer and verify ultra-secure financial data without interference of third parties.</p>
                                </div>

                                <div id="menu2" class="tab-pane fade">
                                    <p>Our mission as an official partner of Bitcoin Foundation is to help you enter, earn and better understand the world of #1 cryptocurrency and avoid any issues you may encounter.</p>
                                </div>

                                <div id="menu3" class="tab-pane fade">
                                    <p>We are here because we are passionate about open, transparent markets and aim to be a major driving force in widespread adoption, we are the first and the best in cryptocurrency.</p>
                                </div>
                            </div>

                            <a class="btn btn-primary" href="/aboutus">Read More</a>
                        </div>

                        <!-- Content Ends -->
                    </div>

                    <!-- Section Content Ends -->
                </div>
            </section>

            <!-- About Section Ends -->

            <!-- Features and Video Section Starts -->

            <section class="image-block">
                <div class="container">
                    <div class="row text-center">
                        <h2 class="title-head">Features & <span>Services</span></h2>

                        <div class="title-head-subtitle">
                            <p>Why investors choose us.</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Feature Starts -->

                        <div class="col-sm-6 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img src="images/icons/green/strong-security.png" alt="strong security" />
                                </span>

                                <h3 class="feature-title">Strong Security</h3>

                                <p>
                                    Protection against DDoS attacks, <br />
                                    full data encryption
                                </p>
                            </div>
                        </div>

                        <!-- Feature Ends -->

                        <!-- Feature Starts -->

                        <div class="col-sm-6 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img src="images/icons/green/world-coverage.png" alt="world coverage" />
                                </span>

                                <h3 class="feature-title">World Coverage</h3>

                                <p>
                                    Providing services in 99% countries<br />
                                    around all the globe
                                </p>
                            </div>
                        </div>

                        <!-- Feature Ends -->

                        <!-- Feature Starts -->

                        <div class="col-sm-6 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img src="images/icons/green/payment-options.png" alt="payment options" />
                                </span>

                                <h3 class="feature-title">Instant Payment</h3>

                                <p>
                                    Daily withdrawal of accumulated earnings,<br />
                                    reoccuring buys, capital deposit and profit withdrawal
                                </p>
                            </div>
                        </div>

                        <!-- Feature Ends -->

                        <!-- Feature Starts -->

                        <div class="col-sm-6 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img src="images/icons/green/mobile-app.png" alt="mobile app" />
                                </span>

                                <h3 class="feature-title">Fast Transactions</h3>

                                <p>
                                    Giving you the edge against spill over<br />
                                    in the volatile market
                                </p>
                            </div>
                        </div>

                        <!-- Feature Ends -->

                        <!-- Feature Starts -->

                        <div class="col-sm-6 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img src="images/icons/green/cost-efficiency.png" alt="cost efficiency" />
                                </span>

                                <h3 class="feature-title">Cost efficiency</h3>

                                <p>
                                    Insignificant to zero cost of investment<br />
                                    and highly secured against crash in the market due to our rich liquidation coefficient
                                </p>
                            </div>
                        </div>

                        <!-- Feature Ends -->

                        <!-- Feature Starts -->

                        <div class="col-sm-6 col-md-4 col-xs-12">
                            <div class="feature text-center">
                                <span class="feature-icon">
                                    <img src="images/icons/green/high-liquidity.png" alt="high liquidity" />
                                </span>

                                <h3 class="feature-title">High Liquidity</h3>

                                <p>
                                    Fast access to high liquidity orderbook<br />
                                    for your sell/buy
                                </p>
                            </div>
                        </div>

                        <!-- Feature Ends -->
                    </div>
                </div>
            </section>

            <!-- Features and Video Section Ends -->

            <!-- Pricing Starts -->

            <section class="pricing">
                <div class="container">
                    <!-- Section Title Starts -->

                    <div class="row text-center">
                        <h2 class="title-head">affordable <span>packages</span></h2>

                        <div class="title-head-subtitle">
                            <p>Tailor-made investment plans to suit your financial goals</p>
                        </div>
                    </div>

                    <!-- Section Title Ends -->

                    <!-- Section Content Starts -->

                    <div class="row pricing-tables-content">
                        <div class="pricing-container">
                            <!-- Pricing Tables Starts -->

                            <ul class="pricing-list">
                                <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <ul class="pricing-wrapper">
                                        <!-- Buy Pricing Table #1 Starts -->
                                        <li data-type="buy" class="is-visible">
                                            <header class="pricing-header">
                                                <h2>starter plan <span>for </span></h2>
                                                <div class="price">
                                                    <span class="value">12% earnings every 24hrs</span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">100 to </span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">499</span>
                                                </div>
                                            </header>
                                            <footer class="pricing-footer">
                                                <a href="/earnmoney/12" class="btn btn-primary">ORDER NOW</a>
                                            </footer>
                                        </li>
                                        <!-- Buy Pricing Table #1 Ends -->
                                    </ul>
                                </li>
                                <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <ul class="pricing-wrapper">
                                        <!-- Buy Pricing Table #1 Starts -->
                                        <li data-type="buy" class="is-visible">
                                            <header class="pricing-header">
                                                <h2>saver plan <span>for </span></h2>
                                                <div class="price">
                                                    <span class="value">25% earnings every 24hrs</span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">500 to </span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">4999</span>
                                                </div>
                                            </header>
                                            <footer class="pricing-footer">
                                                <a href="/earnmoney/25" class="btn btn-primary">ORDER NOW</a>    
                                                
                                            </footer>
                                        </li>
                                        <!-- Buy Pricing Table #1 Ends -->
                                    </ul>
                                </li>
                                <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <ul class="pricing-wrapper">
                                        <!-- Buy Pricing Table #1 Starts -->
                                        <li data-type="buy" class="is-visible">
                                            <header class="pricing-header">
                                                <h2>highearner plan <span>for </span></h2>
                                                <div class="price">
                                                    <span class="value">35% earnings every 48hrs</span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">5000 to </span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">9999</span>
                                                </div>
                                            </header>
                                            <footer class="pricing-footer">
                                                <a href="/earnmoney/35" class="btn btn-primary">ORDER NOW</a>
                                            </footer>
                                        </li>
                                        <!-- Buy Pricing Table #1 Ends -->
                                    </ul>
                                </li>
                                <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <ul class="pricing-wrapper">
                                        <!-- Buy Pricing Table #1 Starts -->
                                        <li data-type="buy" class="is-visible">
                                            <header class="pricing-header">
                                                <h2>leverage plan <span>for </span></h2>
                                                <div class="price">
                                                    <span class="value">40.5% earnings every 68hrs</span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">10000 to </span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">14999</span>
                                                </div>
                                            </header>
                                            <footer class="pricing-footer">
                                                <a href="/earnmoney/40" class="btn btn-primary">ORDER NOW</a>
                                            </footer>
                                        </li>
                                        <!-- Buy Pricing Table #1 Ends -->
                                    </ul>
                                </li>
                                <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <ul class="pricing-wrapper">
                                        <!-- Buy Pricing Table #1 Starts -->
                                        <li data-type="buy" class="is-visible">
                                            <header class="pricing-header">
                                                <h2>partnership plan <span>for </span></h2>
                                                <div class="price">
                                                    <span class="value">60% earnings every 74hrs</span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">15000 to </span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">25999</span>
                                                </div>
                                            </header>
                                            <footer class="pricing-footer">
                                                <a href="/earnmoney/60" class="btn btn-primary">ORDER NOW</a>
                                            </footer>
                                        </li>
                                        <!-- Buy Pricing Table #1 Ends -->
                                    </ul>
                                </li>

                                <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                    <ul class="pricing-wrapper">
                                        <!-- Buy Pricing Table #1 Starts -->
                                        <li data-type="buy" class="is-visible">
                                            <header class="pricing-header">
                                                <h2>capitalist plan <span>for </span></h2>
                                                <div class="price">
                                                    <span class="value">70.5% earnings every 94hrs</span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">26000 to </span><br />
                                                    <span class="currency"><i class="fa fa-dollar"></i></span>
                                                    <span class="value">100000</span>
                                                </div>
                                            </header>
                                            <footer class="pricing-footer">
                                                <a href="/earnmoney/70" class="btn btn-primary">ORDER NOW</a>
                                            </footer>
                                        </li>
                                        <!-- Buy Pricing Table #1 Ends -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pricing Ends -->

            <!-- Bitcoin Calculator Section Starts -->

            <section class="bitcoin-calculator-section">
                <div class="container">
                    <div class="row">
                        <!-- Section Heading Starts -->

                        <div class="col-md-12">
                            <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>

                            <p class="message text-center">Find out the current Bitcoin value with our easy-to-use converter</p>
                        </div>

                        <!-- Section Heading Ends -->

                        <!-- Bitcoin Calculator Form Starts -->

                        <div class="col-md-12 text-center">
                            <form class="bitcoin-calculator" id="bitcoin-calculator">
                                <!-- Input #1 Starts -->

                                <input class="form-input" name="btc-calculator-value" value="1" />

                                <!-- Input #1 Ends -->

                                <div class="form-info"><i class="fa fa-bitcoin"></i></div>

                                <div class="form-equal">=</div>

                                <!-- Input/Result Starts -->

                                <input class="form-input form-input-result" name="btc-calculator-result" />

                                <!-- Input/Result Ends -->

                                <!-- Select Currency Starts -->

                                <div class="form-wrap">
                                    <select id="currency-select" class="form-input select-currency select-primary" name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown"></select>
                                </div>

                                <!-- Select Currency Ends -->
                            </form>

                            <p class="info"><i>* Data updated every 15 minutes</i></p>
                        </div>

                        <!-- Bitcoin Calculator Form Ends -->
                    </div>
                </div>
            </section>

            <!-- Bitcoin Calculator Section Ends -->

            <!-- Team Section Starts -->

            <section class="team">
                <div class="container">
                    <!-- Section Title Starts -->

                    <div class="row text-center">
                        <h2 class="title-head">our <span>experts</span></h2>

                        <div class="title-head-subtitle">
                            <p>A talented team of Cryptocurrency experts based in Ontario, Canada</p>
                        </div>
                    </div>

                    <!-- Section Title Ends -->

                    <!-- Team Members Starts -->

                    <div class="row team-content team-members">
                        <!-- Team Member Starts -->

                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="team-member">
                                <!-- Team Member Picture Starts -->

                                <img src="images/team/a.jpg" class="img-responsive" alt="team member" />

                                <!-- Team Member Picture Ends -->

                                <!-- Team Member Details Starts -->

                                <div class="team-member-caption">
                                    <h4>El Belkhayate </h4>

                                    <p>Ceo</p>
                                </div>

                                <!-- Team Member Details Ends -->
                            </div>
                        </div>

                        <!-- Team Member Ends -->

                        <!-- Team Member Starts -->

                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="team-member">
                                <!-- Team Member Picture Starts -->

                                <img src="images/team/b.jpg" class="img-responsive" alt="team member" />

                                <!-- Team Member Picture Ends -->

                                <!-- Team Member Details Starts -->

                                <div class="team-member-caption social-icons">
                                    <h4>Simo Life</h4>

                                    <p>Co Founder</p>
                                </div>

                                <!-- Team Member Details Ends -->
                            </div>
                        </div>

                        <!-- Team Member Ends -->

                        <!-- Team Member Starts -->

                        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <!-- Team Member-->

                            <div class="team-member">
                                <!-- Team Member Picture Starts -->

                                <img src="images/team/c.jpg" class="img-responsive" alt="team member" />

                                <!-- Team Member Picture Ends -->

                                <!-- Team Member Details Starts -->

                                <div class="team-member-caption">
                                    <h4>Hamza Zraimek</h4>

                                    <p>Bitcoin Consultant</p>
                                </div>

                                <!-- Team Member Details Ends -->
                            </div>
                        </div>

                        <!-- Team Member Ends -->
                    </div>

                    <!-- Team Members Ends -->
                </div>
            </section>

            <!-- Team Section Ends -->

            <!-- Quote and Chart Section Starts -->

            <section class="image-block2">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Quote Starts -->

                        <div class="col-md-4 img-block-quote bg-image-2">
                            <blockquote>
                                <p>
                                    Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and
                                    without restriction. It’s the dawn of a better, more free world.
                                </p>

                                <footer><span>El Belkhayate</span> - CEO</footer>
                            </blockquote>
                        </div>

                        <!-- Quote Ends -->

                        <!-- Chart Starts -->

                        <div class="col-md-8 bg-grey-chart">
                            <div class="chart-widget dark-chart chart-1">
                                <div>
                                    <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Ends -->
                    </div>
                </div>
            </section>

            <!-- Quote and Chart Section Ends -->

            <!-- Blog Section Starts -->

            <section class="blog">
                <div class="container">
                    <!-- Section Title Starts -->

                    <div class="row text-center">
                        <h2 class="title-head">Bitcoin <span>News</span></h2>

                        <div class="title-head-subtitle">
                            <p>Discover Bitcoin must read</p>
                        </div>
                    </div>

                    <!-- Section Title Ends -->

                    <!-- Section Content Starts -->

                    <div class="row latest-posts-content">
                        <!-- Article Starts -->

                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="latest-post">
                                <!-- Featured Image Starts -->

                                <a href="https://www.bitcoinmining.com/how-cryptocurrency-begun/" target="blank"><img class="img-responsive" src="images/blog/blog-post-small-1.jpg" alt="img" /></a>

                                <!-- Featured Image Ends -->

                                <!-- Article Content Starts -->

                                <div class="post-body">
                                    <h4 class="post-title">
                                        <a href="https://www.bitcoinmining.com/how-cryptocurrency-begun/" target="blank">How Cryptocurrency Begun and Its Impact To Financial Transactions</a>
                                    </h4>

                                    <div class="post-text">
                                        <p>With the Bitcoin’s emergence, several people had the choice to obtain a a digital currency or money in which they can utilize similarly just like fiat money...</p>
                                    </div>
                                </div>

                                <div class="post-date">
                                    <span>01</span>

                                    <span>JAN</span>
                                </div>

                                <a href="https://www.bitcoinmining.com/how-cryptocurrency-begun/" target="blank" class="btn btn-primary">read more</a>

                                <!-- Article Content Ends -->
                            </div>
                        </div>

                        <!-- Article Ends -->

                        <!-- Article Starts -->

                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="latest-post">
                                <!-- Featured Image Starts -->

                                <a href="https://www.entrepreneur.com/article/346140" target="blank"><img class="img-responsive" src="images/blog/blog-post-small-2.jpg" alt="img" /></a>

                                <!-- Featured Image Ends -->

                                <!-- Article Content Starts -->

                                <div class="post-body">
                                    <h4 class="post-title">
                                        <a href="https://www.entrepreneur.com/article/346140" target="blank">Cryptocurrency - Who Are Involved With It? Words about members</a>
                                    </h4>

                                    <div class="post-text">
                                        <p>
                                            These professionals all come from differing backgrounds—one person might have come from working in development, whilst another from economics, or a director from an executive corporate
                                            environment, but one thing they all have in common is their imagination and willingness to think outside of the box...
                                        </p>
                                    </div>
                                </div>

                                <div class="post-date">
                                    <span>17</span>

                                    <span>MAR</span>
                                </div>

                                <a href="https://www.entrepreneur.com/article/346140" target="blank" class="btn btn-primary">read more</a>

                                <!-- Article Content Ends -->
                            </div>
                        </div>

                        <!-- Article Ends -->

                        <!-- Article Start -->

                        <div class="col-sm-4 col-md-4 col-xs-12">
                            <div class="latest-post">
                                <!-- Featured Image Starts -->

                                <a href="https://www.fool.com/investing/stock-market/market-sectors/financials/cryptocurrency-stocks/is-cryptocurrency-good-investment/" target="blank">
                                    <img class="img-responsive" src="images/blog/blog-post-small-3.jpg" alt="img" />
                                </a>

                                <!-- Featured Image Ends -->

                                <!-- Article Content Starts -->

                                <div class="post-body">
                                    <h4 class="post-title">
                                        <a href="https://www.fool.com/investing/stock-market/market-sectors/financials/cryptocurrency-stocks/is-cryptocurrency-good-investment/" target="blank">
                                            Risks & Rewards Of Investing In Bitcoin. Pros and Cons
                                        </a>
                                    </h4>

                                    <div class="post-text">
                                        <p>
                                            It's possible to get filthy rich by investing in cryptocurrency in 2021. But you could also lose all of your money. How can both be true? Investing in crypto assets is risky but also potentially
                                            extremely profitable...
                                        </p>
                                    </div>
                                </div>

                                <div class="post-date">
                                    <span>25</span>

                                    <span>FEB</span>
                                </div>

                                <a href="https://www.fool.com/investing/stock-market/market-sectors/financials/cryptocurrency-stocks/is-cryptocurrency-good-investment/" target="blank" class="btn btn-primary">read more</a>

                                <!-- Article Content Ends -->
                            </div>
                        </div>
                    </div>

                    <!-- Section Content Ends -->
                </div>
            </section>

            <!-- Blog Section Ends -->

            <!-- Call To Action Section Starts -->

            <section class="call-action-all">
                <div class="call-action-all-overlay">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <!-- Call To Action Text Starts -->

                                <div class="action-text">
                                    <h2>Get Started Today With Bitcoin</h2>

                                    <p class="lead">Open account for free today and start earning instantly</p>
                                </div>

                                <!-- Call To Action Text Ends -->

                                <!-- Call To Action Button Starts -->

                                <p class="action-btn"><a class="btn btn-primary" href="#">Register Now</a></p>

                                <!-- Call To Action Button Ends -->
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12" style="color: #fff; background-color: rgba(0, 0, 0, 0.5); z-index: 2; text-align: center;">
                                <h2 class="action-text" style="color: #fff; z-index: 2;">Refferal Commission</h2>

                                <p class="lead" style="color: #fff; z-index: 2;">Get On First Level Referal Commission</p>

                                <div>
                                    <h2 style="color: #fff; font-size: 42px; font-family: cursive;">5%</h2>

                                    <p class="action-btn">
                                        <a href="#" class="btn btn-primary">get link</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="google-maps pb-0 pt-0">
                <div class="container-fluid pr-0 pl-0">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 wow fadeIn" data-wow-delay="100ms">
                            <div id="googleMap" style="width: 100%; height: 498px;">
                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19867.63213327645!2d-0.11052665138022721!3d51.504886046223774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760344f267925b%3A0x60d7c5e7c4cb5f86!2sTower%20Bridge%20Rd%2C%20London%2C%20UK!5e0!3m2!1sen!2sng!4v1698487320835!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->

                                <iframe
                                    width="100%"
                                    height="500"
                                    id="gmap_canvas"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19867.63213327645!2d-0.11052665138022721!3d51.504886046223774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760344f267925b%3A0x60d7c5e7c4cb5f86!2sTower%20Bridge%20Rd%2C%20London%2C%20UK!5e0!3m2!1sen!2sng!4v1698487320835!5m2!1sen!2sng"
                                    frameborder="0"
                                    scrolling="no"
                                    marginheight="0"
                                    marginwidth="0"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('user.footer')