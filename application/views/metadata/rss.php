<?php  echo '<?xml version="1.0" encoding="' . $encoding . '"?>' . "\n"; ?>

<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/"
    xmlns:atom="http://www.w3.org/2005/Atom">
 
    <channel>
    
    <title><?php echo $feed_name; ?></title>

 <atom:link href="http://www.news.marketsizeforecasters.com/rssfeed.xml" rel="self" type="application/rss+xml" />
<link><?php echo $feed_url; ?></link>
<description><?php echo $page_description; ?></description>
<language><?php echo $page_language; ?></language>
<dc:creator><?php echo $creator_email; ?></dc:creator>
<sy:updatePeriod>hourly</sy:updatePeriod>
<sy:updateFrequency>1</sy:updateFrequency>

 
<dc:rights>Copyright <?php echo gmdate("Y", time()); ?></dc:rights>
<admin:generatorAgent rdf:resource="<?php echo $feed_name;  ?>" />
<?php if(!empty($news)){
             foreach($news as $row){ ?>
       <item>
        
<title><?php echo str_replace("&","&amp;",$row->name); ?></title>
 <link><?php echo base_url($row->url); ?></link>
<guid><?php echo base_url($row->url); ?></guid>
<pubDate><?php $d = new DateTime($row->date);
$formatted_date = $d->format('D, d M Y H:i:s ');
echo $formatted_date;
?>+0530</pubDate>
<category><![CDATA[retail]]></category>
  <description><?php echo preg_replace("/&#?[a-z0-9]+;/i","",strip_tags($row->full_desc)); ?></description>
 </item>
                 <?php }}?>


<?php if(!empty($industry)){
             foreach($industry as $row){ ?>
       <item>
        
<title><?php echo str_replace("&","&amp;",$row->name); ?></title>
 <link><?php echo base_url($row->url); ?></link>
<guid><?php echo base_url($row->url); ?></guid>
<pubDate><?php $d = new DateTime($row->date);
$formatted_date = $d->format('D, d M Y H:i:s ');
echo $formatted_date;
?>+0530</pubDate>
<category><![CDATA[world]]></category>
  <description><?php echo preg_replace("/&#?[a-z0-9]+;/i","",strip_tags($row->full_desc)); ?></description>
 </item>
                 <?php }}?>


<?php if(!empty($business)){
             foreach($business as $row){ ?>
       <item>
        
<title><?php echo str_replace("&","&amp;",$row->name); ?></title>
 <link><?php echo base_url($row->url); ?></link>
<guid><?php echo base_url($row->url); ?></guid>
<pubDate><?php $d = new DateTime($row->date);
$formatted_date = $d->format('D, d M Y H:i:s ');
echo $formatted_date;
?>+0530</pubDate>
 <category><![CDATA[health]]></category>
 
  <description><?php echo preg_replace("/&#?[a-z0-9]+;/i","",strip_tags($row->full_desc)); ?></description>
 </item>
                 <?php }}?>

    
    </channel>
</rss>