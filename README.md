
# reactpaginator
React js pagination plugin

## Usage ##
### Without Ajax ###

1. First you have to call jquery, bootstrap and react libraries. 
2. Then you have to call a jsx transformer library and "reactPaginate.js" library.
3. Obviously you need a dataset to paginata. To give a data set here we use a JSON array.
	 
		var jsonData = [
                                {"image": "http://images.prd.mris.com/image/V2/1/Yu59d899Ocpyr_RnF0-8qNJX1oYibjwp9TiLy-bZvU9vRJ2iC1zSQgFwW-fTCs6tVkKrj99s7FFm5Ygwl88xIA.jpg", "price": "$1,975,000", "address": "609 W Gravers Ln", "area": "4,820 SqFt", "beds": "5", "baths": "5", "desc": "Situated between fairmount park and the prestigious philadelphia cricket club, this beautiful 2+ acre property is truly ...", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/vGoNjc2jHGb87GlnnDQlf6LxeOUgIOn0bL6Wvn1nEnig2Ntq6W7xN5cOQBZZeNxl9O42DOkHUw0LNnj1ZB2KHA.jpg", "price": "$1,500,000", "address": "1220-32 N Howard St", "area": "4,900 SqFt", "beds": "1", "baths": "1", "desc": "A once in a lifetime opportunity to own a unique live / work space in one of philadelphia's most popular neighborhoods. ", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/zMjCkcFeFDXDAP8xDhbD9ZmrVL7oGkBvSnh2bDBZ6UB5UHXa3_g8c6XYhRY_OxgGaMBMehiTWXDSLzBMaIzRhA.jpg", "price": "$1,975,000", "address": "218 Lynnebrook Ln", "area": "6,959 SqFt", "beds": "6", "baths": "6", "desc": "Impressively positioned overlooking 3.5 captivating acres, designated as 'significant' by this chestnut hill historical s", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/uLp58OH37CTPHxXcgJXYw8zT2u3xg_2XIbFndB6J0WTSAStGBaEV6YsdAseSZTKAdthm0OzG-Ca_EIkoXIEBxw.jpg", "price": "$1,295,000", "address": "9006 Crefeld St", "area": "7,672 SqFt", "beds": "7", "baths": "7", "desc": "Located in chestnut hill, recently named by the american planning association as one of america's top 10 great neighborh", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/iwn7qH9r9OPnqTaTTxxb8PBzQHk2EiHU2PBBntt041AZsVsGY-SeUexTMLgRcYSJukrKOwHaYnTVXAsk6RdSmA.jpg", "price": "$1,599,999", "address": "209 Chestnut Hill ve", "area": "16,581 SqFt", "beds": "8", "baths": "4", "desc": "Built in 1909 by pittsburgh steel magnate henry a. laughlin, greylock is a classic chestnut hill stone mansion once cons", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/K12MLs4i-e2rsQ-rA6DoCwlysXSrEXZyHtCFkrOLsvK1y2mvbUrlmw5pMXX1laXlnY9_0VU82YeS3EucwIchtg.jpg", "price": "$1,175,000", "address": "701 W Allens Ln", "area": "9,824 SqFt", "beds": "8", "baths": "5", "desc": "A once in a lifetime opportunity! live in this grand home with its stunning entry and staircase, bedroom suites, firepla", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                                {"image": "http://images.prd.mris.com/image/V2/1/7IZk2HTN0AcHnIb7VCvisTUc3kTbn0UyHQlVAlwkNLM3_8UNN8pcgy9u6KVNoRGGH_kdUlpYehdbqzctRNUebg.jpg", "price": "$1,595,000", "address": "704 Saint Georges St", "area": "0 SqFt", "beds": "4", "baths": "5", "desc": "Situated between fairmount park", "subdesc": "Courtesy of HS Fox & Roach-Chestnut Hill Evergreen"},
                            ];	
4. Then you have to call a simple javascript function.

		paginationNoAjax(jsonData, 6, 'paginateid', 'paginate_content');

	As parameters for this function we have to pass json array above and items per page, Parent div id for nuber plate and Parent div id for item set.
5. Next you have to React component called 'ReactPaginate'. 
6. Inside return of render event you can give the html structure for single item in pagination.

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

7. Don't worry about the length of structure. But please consider that this is written using 'JSX syntax'. And You can call items from your array like {this.props.getObject.pirce} , {this.props.getObject.desc} Etc. And if you feels like this HTML structure is too lengthy try with something simpler like this :)

		var ReactPaginate = React.createClass({                    
                render: function(){
                    return (
                        <p>{this.props.getObject.price}</p>
                    );
                }
        });