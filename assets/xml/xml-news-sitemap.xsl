<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
	xmlns:html="http://www.w3.org/TR/REC-html40" 
	xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9" 
		xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" 
		xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
<xsl:template match="/">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Google News Sitemap Feed</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">body{font-family:"Lucida Grande","Lucida Sans Unicode",Tahoma,Verdana,sans-serif;font-size:13px}#header,#footer{padding:2px;margin:10px;font-size:8pt;color:gray}a{color:black}td{font-size:11px;border: 1px solid #dcdcdc;}th{text-align:left;padding-right:30px;font-size:11px;border: 1px solid #dcdcdc;}tr.high{background-color:#ecf9ff}#footer img{vertical-align:bottom}</style>
</head>
<body>
	<h1>Google News Sitemap Feed</h1>
	<div id="content">
		<table cellpadding="5" style="border-collapse:collapse">
			<tr class="high">
				<th>#</th>
				<th>Title</th>
				<th>Language</th>
				<th>Keyword(s)</th>
				<th>Image(s)</th>
				<th>Publication Date (GMT +5:30)</th>
			</tr>
<xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
<xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
<xsl:for-each select="sitemap:urlset/sitemap:url">
			<tr><xsl:if test="position() mod 2 != 1"><xsl:attribute  name="class">high</xsl:attribute></xsl:if>
				<td><xsl:value-of select="position()"/></td>
				<td><xsl:variable name="itemURL"><xsl:value-of select="sitemap:loc"/></xsl:variable>
					<a href="{$itemURL}"><xsl:value-of select="news:news/news:title"/></a>
				</td>
				<td><xsl:value-of select="news:news/news:publication/news:language"/></td>
				<td><xsl:value-of select="news:news/news:keywords"/></td>
				<td><xsl:value-of select="count(image:image)"/></td>
				<td><xsl:value-of select="concat(substring(news:news/news:publication_date,0,11),concat(' ', substring(news:news/news:publication_date,12,8)))"/></td>
			</tr>
</xsl:for-each>
		</table>
	</div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
