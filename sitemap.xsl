<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
	<xsl:template match="/">
		<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<title>Elements Exhibition | XML Sitemap</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<style type="text/css">
					body {
						background:#fff;
						margin:0;
						padding:0;
						font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
					}
					
					.container {
						margin:0 auto;
						width:1009px;
					}
			
					.header {
						height: 150px;
						margin: 0 0 13px;
						position: relative;
						z-index: 3;
			
						background: #cecece; /* Old browsers */
						background: -moz-linear-gradient(top,  #cecece 0%, #ffffff 100%); /* FF3.6+ */
						background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#cecece), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
						background: -webkit-linear-gradient(top,  #cecece 0%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
						background: -o-linear-gradient(top,  #cecece 0%,#ffffff 100%); /* Opera 11.10+ */
						background: -ms-linear-gradient(top,  #cecece 0%,#ffffff 100%); /* IE10+ */
						background: linear-gradient(to bottom,  #cecece 0%,#ffffff 100%); /* W3C */
						filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cecece', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
					}

					#main-logo {
			            background: url(/img/skin/oct12/global-sprite.png) no-repeat;
			            background-position: 0 -718px;
			            display: block;
			            float: left;
			            height: 70px;
			            margin: 36px 0 0 0;
			            text-indent: -999em;
			            width: 307px;
			        }
					
					.pageTitle {
			            border-bottom: 1px solid black;
			            color: black;
			            height: 50px;
			            line-height: 50px;  
			            margin: 5px 0 17px;
			        }

			        .pageTitle h1 {
			            float: left;
			            line-height: 50px;
			            font-size: 22px;
			            font-weight: normal;
			            margin: 0 0 15px;
			        }


					.alert {
						padding: 10px 30px 10px 30px;
						margin-bottom: 20px;
						text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
						color: black;
						background-color: white;
						border: 1px solid #CCC;
						-webkit-border-radius: 4px;
						-moz-border-radius: 4px;
						border-radius: 4px;
					}

					.success {
						color: #005F00;
						background-color: #DFFFDF;
						border-color: #9FCF9F;
					}

					.success a,
					.success a:visited { color:#000; }
					
					footer {
						padding:2px 0;
						margin:10px 0;
						font-size:8pt;
						color:gray;
					}
					
					footer a {
						color:gray;
					}
					
					a {
						color:black;
					}

					.table {
					  width: 100%;
					  margin-bottom: 20px;
					}

					.table th,
					.table td {
					  padding: 8px;
					  line-height: 20px;
					  text-align: left;
					  vertical-align: top;
					  border-top: 1px solid #dddddd;
					}

					.table th {
					  font-weight: bold;
					}

					.table thead th {
					  vertical-align: bottom;
					}

					.table caption + thead tr:first-child th,
					.table caption + thead tr:first-child td,
					.table colgroup + thead tr:first-child th,
					.table colgroup + thead tr:first-child td,
					.table thead:first-child tr:first-child th,
					.table thead:first-child tr:first-child td {
					  border-top: 0;
					}

					.table tbody + tbody {
					  border-top: 2px solid #dddddd;
					}

					.table .table {
					  background-color: #ffffff;
					}

					.table-condensed th,
					.table-condensed td {
					  padding: 4px 5px;
					}

					.table-bordered {
					  border: 1px solid #dddddd;
					  border-collapse: separate;
					  *border-collapse: collapse;
					  border-left: 0;
					  -webkit-border-radius: 4px;
					     -moz-border-radius: 4px;
					          border-radius: 4px;
					}

					.table-bordered th,
					.table-bordered td {
					  border-left: 1px solid #dddddd;
					}

					.table-bordered caption + thead tr:first-child th,
					.table-bordered caption + tbody tr:first-child th,
					.table-bordered caption + tbody tr:first-child td,
					.table-bordered colgroup + thead tr:first-child th,
					.table-bordered colgroup + tbody tr:first-child th,
					.table-bordered colgroup + tbody tr:first-child td,
					.table-bordered thead:first-child tr:first-child th,
					.table-bordered tbody:first-child tr:first-child th,
					.table-bordered tbody:first-child tr:first-child td {
					  border-top: 0;
					}

					.table-bordered thead:first-child tr:first-child > th:first-child,
					.table-bordered tbody:first-child tr:first-child > td:first-child {
					  -webkit-border-top-left-radius: 4px;
					          border-top-left-radius: 4px;
					  -moz-border-radius-topleft: 4px;
					}

					.table-bordered thead:first-child tr:first-child > th:last-child,
					.table-bordered tbody:first-child tr:first-child > td:last-child {
					  -webkit-border-top-right-radius: 4px;
					          border-top-right-radius: 4px;
					  -moz-border-radius-topright: 4px;
					}

					.table-bordered thead:last-child tr:last-child > th:first-child,
					.table-bordered tbody:last-child tr:last-child > td:first-child,
					.table-bordered tfoot:last-child tr:last-child > td:first-child {
					  -webkit-border-bottom-left-radius: 4px;
					          border-bottom-left-radius: 4px;
					  -moz-border-radius-bottomleft: 4px;
					}

					.table-bordered thead:last-child tr:last-child > th:last-child,
					.table-bordered tbody:last-child tr:last-child > td:last-child,
					.table-bordered tfoot:last-child tr:last-child > td:last-child {
					  -webkit-border-bottom-right-radius: 4px;
					          border-bottom-right-radius: 4px;
					  -moz-border-radius-bottomright: 4px;
					}

					.table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
					  -webkit-border-bottom-left-radius: 0;
					          border-bottom-left-radius: 0;
					  -moz-border-radius-bottomleft: 0;
					}

					.table-bordered tfoot + tbody:last-child tr:last-child td:last-child {
					  -webkit-border-bottom-right-radius: 0;
					          border-bottom-right-radius: 0;
					  -moz-border-radius-bottomright: 0;
					}

					.table-bordered caption + thead tr:first-child th:first-child,
					.table-bordered caption + tbody tr:first-child td:first-child,
					.table-bordered colgroup + thead tr:first-child th:first-child,
					.table-bordered colgroup + tbody tr:first-child td:first-child {
					  -webkit-border-top-left-radius: 4px;
					          border-top-left-radius: 4px;
					  -moz-border-radius-topleft: 4px;
					}

					.table-bordered caption + thead tr:first-child th:last-child,
					.table-bordered caption + tbody tr:first-child td:last-child,
					.table-bordered colgroup + thead tr:first-child th:last-child,
					.table-bordered colgroup + tbody tr:first-child td:last-child {
					  -webkit-border-top-right-radius: 4px;
					          border-top-right-radius: 4px;
					  -moz-border-radius-topright: 4px;
					}

					.table-striped tbody > tr:nth-child(odd) > td,
					.table-striped tbody > tr:nth-child(odd) > th {
					  background-color: #f9f9f9;
					}

					.table-hover tbody tr:hover td,
					.table-hover tbody tr:hover th {
					  background-color: #f5f5f5;
					}


				</style>
			</head>
			<body>
				<div class="header">
					<div class="container">
						<a href="/"><img src="assets/images/foundation/home-logo.png" /></a>
					</div>
				</div>

				<div class="container">
			        <div class="page-container">
			            <div class="pageTitle">
			                <h1>XML Sitemap</h1>
			            </div>
			            <div class="alert success">
							This is an XML Sitemap which is supposed to be processed by search engines like <a href="http://www.google.com">Google</a>, <a href="http://bing.com">Bing</a> and <a href="http://www.yahoo.com">YAHOO</a>.<br />
						</div>

						<table class="table table-hover table-striped" cellpadding="5">
							<thead>
								<tr>
									<th>URL</th>
									<th>Priority</th>
									<th>Change Frequency</th>
									<th>LastChange (GMT)</th>
								</tr>
							</thead>
							<tbody>
								<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
								<xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
								<xsl:for-each select="sitemap:urlset/sitemap:url">
									<tr>
										<td>
											<xsl:variable name="itemURL">
												<xsl:value-of select="sitemap:loc"/>
											</xsl:variable>
											<a href="{$itemURL}">
												<xsl:value-of select="sitemap:loc"/>
											</a>
										</td>
										<td>
											<xsl:value-of select="concat(sitemap:priority*100,'%')"/>
										</td>
										<td>
											<xsl:value-of select="concat(translate(substring(sitemap:changefreq, 1, 1),concat($lower, $upper),concat($upper, $lower)),substring(sitemap:changefreq, 2))"/>
										</td>
										<td>
											<xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)))"/>
										</td>
									</tr>
								</xsl:for-each>
							</tbody>
						</table>
			        </div>
			    </div>
	
				
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>