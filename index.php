<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>

        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>      

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/react@15.3.2/dist/react.js"></script>
        <script src="https://unpkg.com/react-dom@15.3.2/dist/react-dom.js"></script>
        <script src="https://fb.me/JSXTransformer-0.13.3.js"></script>

        <script src="http://code.jquery.com/jquery-latest.min.js"></script>

        <script type="text/jsx" src="reactPaginate.js"></script>        

        <script type="text/jsx">          
            
            var ReactPaginate = React.createClass({     
                
                render: function(){
                    return (
                        <div  className="col-sm-6">
                            <div className="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                                <div className="media">
                                    <a className="pull-left" href="#" target="_parent">
                                        <img alt="image" className="img-responsive" src={this.props.getObject.image}></img>
                                    </a>
                                    <div className="clearfix visible-sm"></div>                                                        
                                    <div className="media-body fnt-smaller">
                                        <a href="#" target="_parent"></a>

                                        <h4 className="media-heading">
                                            <a href="#" target="_parent">{this.props.getObject.price}<small className="pull-right">{this.props.getObject.address}</small></a></h4>


                                        <ul className="list-inline mrg-0 btm-mrg-10 clr-535353">
                                            <li>{this.props.getObject.area}</li>

                                            <li className="verticalline">|</li>

                                            <li>{this.props.getObject.beds} Beds</li>

                                            <li className="verticalline">|</li>

                                            <li>{this.props.getObject.baths} Baths</li>
                                        </ul>

                                        <p className="hidden-xs">{this.props.getObject.desc}
                                                    ...</p><span className="fnt-smaller fnt-lighter fnt-arial">{this.props.getObject.subdesc}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    );
                }
            });
            
            var jsonData = [
                                {"image": "http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg", "price": "$1,975,000", "address": "609 W Gravers Ln", "area": "4,820 SqFt", "beds": "5", "baths": "5", "desc": "Situated between fairmount park and the prestigious philadelphia cricket club, this beautiful 2+ acre property is truly ...", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/vGoNjc2jHGb87GlnnDQlf6LxeOUgIOn0bL6Wvn1nEnig2Ntq6W7xN5cOQBZZeNxl9O42DOkHUw0LNnj1ZB2KHA.jpg", "price": "$1,500,000", "address": "1220-32 N Howard St", "area": "4,900 SqFt", "beds": "1", "baths": "1", "desc": "A once in a lifetime opportunity to own a unique live / work space in one of philadelphia's most popular neighborhoods. ", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/zMjCkcFeFDXDAP8xDhbD9ZmrVL7oGkBvSnh2bDBZ6UB5UHXa3_g8c6XYhRY_OxgGaMBMehiTWXDSLzBMaIzRhA.jpg", "price": "$1,975,000", "address": "218 Lynnebrook Ln", "area": "6,959 SqFt", "beds": "6", "baths": "6", "desc": "Impressively positioned overlooking 3.5 captivating acres, designated as 'significant' by this chestnut hill historical s", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/uLp58OH37CTPHxXcgJXYw8zT2u3xg_2XIbFndB6J0WTSAStGBaEV6YsdAseSZTKAdthm0OzG-Ca_EIkoXIEBxw.jpg", "price": "$1,295,000", "address": "9006 Crefeld St", "area": "7,672 SqFt", "beds": "7", "baths": "7", "desc": "Located in chestnut hill, recently named by the american planning association as one of america's top 10 great neighborh", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/iwn7qH9r9OPnqTaTTxxb8PBzQHk2EiHU2PBBntt041AZsVsGY-SeUexTMLgRcYSJukrKOwHaYnTVXAsk6RdSmA.jpg", "price": "$1,599,999", "address": "209 Chestnut Hill ve", "area": "16,581 SqFt", "beds": "8", "baths": "4", "desc": "Built in 1909 by pittsburgh steel magnate henry a. laughlin, greylock is a classic chestnut hill stone mansion once cons", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/K12MLs4i-e2rsQ-rA6DoCwlysXSrEXZyHtCFkrOLsvK1y2mvbUrlmw5pMXX1laXlnY9_0VU82YeS3EucwIchtg.jpg", "price": "$1,175,000", "address": "701 W Allens Ln", "area": "9,824 SqFt", "beds": "8", "baths": "5", "desc": "A once in a lifetime opportunity! live in this grand home with its stunning entry and staircase, bedroom suites, firepla", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/7IZk2HTN0AcHnIb7VCvisTUc3kTbn0UyHQlVAlwkNLM3_8UNN8pcgy9u6KVNoRGGH_kdUlpYehdbqzctRNUebg.jpg", "price": "$1,595,000", "address": "704 Saint Georges St", "area": "0 SqFt", "beds": "4", "baths": "5", "desc": "Situated between fairmount park", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                            ];
            
            paginationNoAjax(jsonData, 6, 'paginateid', 'paginate_content');
            
//            With Ajax
//            paginationWithAjax(6, 'paginateid2', 'paginate_content2', "getjsoncount.php", "getjsonarray.php");
            
        </script>
        

        <style>
            /**** BASE ****/
            body {
                color: #888;   
            }
            a {
                color: #03a1d1;
                text-decoration: none!important;
            }

            /**** LAYOUT ****/
            .list-inline>li {
                padding: 0 10px 0 0;
            }
            .container-pad {
                padding: 30px 15px;
            }


            /**** MODULE ****/
            .bgc-fff {
                background-color: #fff!important;
            }
            .box-shad {
                -webkit-box-shadow: 1px 1px 0 rgba(0,0,0,.2);
                box-shadow: 1px 1px 0 rgba(0,0,0,.2);
            }
            .brdr {
                border: 1px solid #ededed;
            }

            /* Font changes */
            .fnt-smaller {
                font-size: .9em;
            }
            .fnt-lighter {
                color: #bbb;
            }

            /* Padding - Margins */
            .pad-10 {
                padding: 10px!important;
            }
            .mrg-0 {
                margin: 0!important;
            }
            .btm-mrg-10 {
                margin-bottom: 10px!important;
            }
            .btm-mrg-20 {
                margin-bottom: 20px!important;
            }

            /* Color  */
            .clr-535353 {
                color: #535353;
            }

            .verticalline{
                list-style: none;
            }


            /**** MEDIA QUERIES ****/
            @media only screen and (max-width: 991px) {
                #property-listings .property-listing {
                    padding: 5px!important;
                }
                #property-listings .property-listing a {
                    margin: 0;
                }
                #property-listings .property-listing .media-body {
                    padding: 10px;
                }
            }

            @media only screen and (min-width: 992px) {
                #property-listings .property-listing img {
                    max-width: 180px;
                }
            }
        </style>

    </head>
    <body>
        <div class="container-fluid" style="background-color:#e8e8e8">
            <div class="container container-pad" id="property-listings">

                <div class="row">
                    <div class="col-md-12">
                        <h1>React Js pagination plugin</h1>
                        <p>A simple plugin witch can be used with or without ajax</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-decoration: underline;">Without ajax</h2>
                    </div>
                </div>
                
                <div class="row" id="paginate_content">

                </div>               
                <div class="raw" style="text-align: center;">
                    <div id="paginateid"></div>
                </div>
                
<!--                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-decoration: underline;">With ajax</h2>
                    </div>
                </div>-->
                
                <div class="row" id="paginate_content2">

                </div>               
                <div class="raw" style="text-align: center;">
                    <div id="paginateid2"></div>
                </div>

            </div><!-- End container -->
        </div>
    </body>
</html> 