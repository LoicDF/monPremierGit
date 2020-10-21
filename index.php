<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="DIGIT VALUE SAS / RH" />
      <meta name="company" content="DIGIT VALUE SAS" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Arial'; font-size:10pt; background-color:white }
      th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Arial'; font-size:10pt; background-color:white }
      td.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style4 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style4 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style5 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style5 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:#9BA5B2 }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:#9BA5B2 }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:12pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:12pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:14pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:14pt; background-color:white }
      td.style10 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:8pt; background-color:white }
      th.style10 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:8pt; background-color:white }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:8pt; background-color:white }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:8pt; background-color:white }
      td.style13 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style13 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style14 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:white }
      td.style18 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style18 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style19 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style19 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style20 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style20 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style21 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style21 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      td.style23 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style23 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style24 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:24pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:24pt; background-color:white }
      td.style25 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#171F46; font-family:'Montserrat'; font-size:12pt; background-color:white }
      th.style25 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#171F46; font-family:'Montserrat'; font-size:12pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:#9BA5B2 }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:#9BA5B2 }
      td.style27 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:12pt; background-color:#FFFFFF }
      th.style27 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:12pt; background-color:#FFFFFF }
      td.style28 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style28 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:#9BA5B2 }
      th.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:11pt; background-color:#9BA5B2 }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#171F46; font-family:'Montserrat'; font-size:10pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:12pt; background-color:white }
      td.style35 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:10pt; background-color:white }
      th.style35 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#9BA5B2; font-family:'Montserrat'; font-size:10pt; background-color:white }
      table.sheet0 col.col0 { width:88.78888787pt }
      table.sheet0 col.col1 { width:89.46666564pt }
      table.sheet0 col.col2 { width:18.29999979pt }
      table.sheet0 col.col3 { width:18.29999979pt }
      table.sheet0 col.col4 { width:18.29999979pt }
      table.sheet0 col.col5 { width:18.29999979pt }
      table.sheet0 col.col6 { width:18.29999979pt }
      table.sheet0 col.col7 { width:18.29999979pt }
      table.sheet0 col.col8 { width:18.29999979pt }
      table.sheet0 col.col9 { width:18.29999979pt }
      table.sheet0 col.col10 { width:18.29999979pt }
      table.sheet0 col.col11 { width:18.29999979pt }
      table.sheet0 col.col12 { width:18.29999979pt }
      table.sheet0 col.col13 { width:18.29999979pt }
      table.sheet0 col.col14 { width:18.29999979pt }
      table.sheet0 col.col15 { width:18.29999979pt }
      table.sheet0 col.col16 { width:18.29999979pt }
      table.sheet0 col.col17 { width:18.29999979pt }
      table.sheet0 col.col18 { width:18.29999979pt }
      table.sheet0 col.col19 { width:18.29999979pt }
      table.sheet0 col.col20 { width:18.29999979pt }
      table.sheet0 col.col21 { width:18.29999979pt }
      table.sheet0 col.col22 { width:18.29999979pt }
      table.sheet0 col.col23 { width:18.29999979pt }
      table.sheet0 col.col24 { width:18.29999979pt }
      table.sheet0 col.col25 { width:18.29999979pt }
      table.sheet0 col.col26 { width:18.29999979pt }
      table.sheet0 col.col27 { width:18.29999979pt }
      table.sheet0 col.col28 { width:18.29999979pt }
      table.sheet0 col.col29 { width:18.29999979pt }
      table.sheet0 col.col30 { width:18.29999979pt }
      table.sheet0 col.col31 { width:18.29999979pt }
      table.sheet0 col.col32 { width:18.29999979pt }
      table.sheet0 col.col33 { width:25.75555526pt }
      table.sheet0 col.col34 { width:23.04444418pt }
      table.sheet0 col.col35 { width:54.2222216pt }
      table.sheet0 tr { height:12.75pt }
      table.sheet0 tr.row1 { height:21pt }
      table.sheet0 tr.row2 { height:42pt }
      table.sheet0 tr.row3 { height:21pt }
      table.sheet0 tr.row4 { height:24pt }
      table.sheet0 tr.row5 { height:24pt }
      table.sheet0 tr.row6 { height:21pt }
      table.sheet0 tr.row7 { height:67.5pt }
      table.sheet0 tr.row8 { height:30.75pt }
      table.sheet0 tr.row9 { height:30.75pt }
      table.sheet0 tr.row10 { height:30.75pt }
      table.sheet0 tr.row11 { height:30.75pt }
      table.sheet0 tr.row12 { height:30.75pt }
      table.sheet0 tr.row13 { height:27pt }
      table.sheet0 tr.row14 { height:27pt }
      table.sheet0 tr.row15 { height:15pt }
      table.sheet0 tr.row16 { height:12.75pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.75in; margin-bottom: 0.75in; }
body { margin-left: 0.25in; margin-right: 0.25in; margin-top: 0.75in; margin-bottom: 0.75in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <col class="col15">
        <col class="col16">
        <col class="col17">
        <col class="col18">
        <col class="col19">
        <col class="col20">
        <col class="col21">
        <col class="col22">
        <col class="col23">
        <col class="col24">
        <col class="col25">
        <col class="col26">
        <col class="col27">
        <col class="col28">
        <col class="col29">
        <col class="col30">
        <col class="col31">
        <col class="col32">
        <col class="col33">
        <col class="col34">
        <col class="col35">
        <tbody>
        <div style="position: relative;"><img src="digitvalue.png" style="position: absolute; z-index: 1; left: 0px; top: 0px; width: 119px; height: 119px;" src="zip:///home/CloudConvertio/tmp/in_work/3c2999610c974d1b9182997713f44885.xlsx#xl/media/image1.jpeg" border="0" /></div></td>  <!-- j'ai modifié ce code -->
          <tr class="row0">
            <td class="column0 style1 null">

            <td class="column1  style1 null">&nbsp;</td>
            <td class="column2  style1 null">&nbsp;</td>
            <td class="column3 style1 null">&nbsp;</td>
            <td class="column4 style1 null">&nbsp;</td>
            <td class="column5 style1 null">&nbsp;</td>
            <td class="column6 style1 null">&nbsp;</td>
            <td class="column7 style1 null">&nbsp;</td>
            <td class="column8 style1 null">&nbsp;</td>
            <td class="column9 style1 null">&nbsp;</td>
            <td class="column10 style1 null">&nbsp;</td>
            <td class="column11 style1 null">&nbsp;</td>
            <td class="column12 style1 null">&nbsp;</td>
            <td class="column13 style1 null">&nbsp;</td>
            <td class="column14 style1 null">&nbsp;</td>
            <td class="column15 style1 null">&nbsp;</td>
            <td class="column16 style1 null">&nbsp;</td>
            <td class="column17 style1 null">&nbsp;</td>
            <td class="column18 style1 null">&nbsp;</td>
            <td class="column19 style1 null">&nbsp;</td>
            <td class="column20 style1 null">&nbsp;</td>
            <td class="column21 style1 null">&nbsp;</td>
            <td class="column22 style1 null">&nbsp;</td>
            <td class="column23 style1 null">&nbsp;</td>
            <td class="column24 style1 null">&nbsp;</td>
            <td class="column25 style1 null">&nbsp;</td>
            <td class="column26 style1 null">&nbsp;</td>
            <td class="column27 style1 null">&nbsp;</td>
            <td class="column28 style1 null">&nbsp;</td>
            <td class="column29 style1 null">&nbsp;</td>
            <td class="column30 style1 null">&nbsp;</td>
            <td class="column31 style1 null">&nbsp;</td>
            <td class="column32 style1 null">&nbsp;</td>
            <td class="column33 style1 null">&nbsp;</td>
            
            
          </tr>
          <tr class="row1">
            <td class="column0 style1 null">&nbsp;</td>
            <td class="column1 style1 null">&nbsp;</td>
            <td class="column2 style1 null">&nbsp;</td>
            <td class="column3 style1 null">&nbsp;</td>
            <td class="column4 style1 null">&nbsp;</td>
            <td class="column5 style1 null">&nbsp;</td>
            <td class="column6 style1 null">&nbsp;</td>
            <td class="column7 style1 null">&nbsp;</td>
            <td class="column8 style1 null">&nbsp;</td>
            <td class="column9 style1 null">&nbsp;</td>
            <td class="column10 style1 null">&nbsp;</td>
            <td class="column11 style1 null">&nbsp;</td>
            <td class="column12 style1 null">&nbsp;</td>
            <td class="column13 style1 null">&nbsp;</td>
            <td class="column14 style1 null">&nbsp;</td>
            <td class="column15 style1 null">&nbsp;</td>
            <td class="column16 style1 null">&nbsp;</td>
            <td class="column17 style1 null">&nbsp;</td>
            <td class="column18 style1 null">&nbsp;</td>
            <td class="column19 style1 null">&nbsp;</td>
            <td class="column20 style1 null">&nbsp;</td>
            <td class="column21 style1 null">&nbsp;</td>
            <td class="column22 style1 null">&nbsp;</td>
            <td class="column23 style1 null">&nbsp;</td>
            <td class="column24 style1 null">&nbsp;</td>
            <td class="column25 style1 null">&nbsp;</td>
            <td class="column26 style1 null">&nbsp;</td>
            <td class="column27 style1 null">&nbsp;</td>
            <td class="column28 style1 null">&nbsp;</td>
            <td class="column29 style1 null">&nbsp;</td>
            <td class="column30 style1 null">&nbsp;</td>
            <td class="column31 style1 null">&nbsp;</td>
            <td class="column32 style1 null">&nbsp;</td>
            <td class="column33 style1 null">&nbsp;</td>
            
            
          </tr>
          <tr class="row2">
            <td class="column0 style24 s style24" colspan="34">Rapport d'intervention</td>
            
            
          </tr>
          <tr class="row3">
            <td class="column0 style25 null style25" colspan="34"></td>
            
            
          </tr>
          <tr class="row4">
            <td class="column0 style7 s">Mois</td>  <!--code a re-travailler ici-->
            <td class="column1 style8 n" ><input type="text" mois="mois" placeholder="mois" style="text-align:center ;"></td> <!--code a re-travailler ici-->
            <td class="column2 style1 null">&nbsp;</td>
            <td class="column3 style1 null">&nbsp;</td>
            <td class="column4 style1 null">&nbsp;</td>
            <td class="column5 style9 null"></td>
            <td class="column6 style1 null">&nbsp;</td>
            <td class="column7 style1 null">&nbsp;</td>
            <td class="column8 style1 null">&nbsp;</td>
            <td class="column9 style1 null">&nbsp;</td>
            <td class="column10 style1 null">&nbsp;</td>
            <td class="column11 style1 null">&nbsp;</td>
            <td class="column12 style1 null">&nbsp;</td>
            <td class="column13 style1 null">&nbsp;</td>
            <td class="column14 style1 null">&nbsp;</td>
            <td class="column15 style1 null">&nbsp;</td>
            <td class="column16 style1 null">&nbsp;</td>
            <td class="column17 style1 null">&nbsp;</td>
            <td class="column18 style1 null">&nbsp;</td>
            <td class="column19 style1 null">&nbsp;</td>
            <td class="column20 style1 null">&nbsp;</td>
            <td class="column21 style1 null">&nbsp;</td>
            <td class="column22 style26 s style26" colspan="4">Projet</td>  <!--code a re-travailler ici-->
            <td class="column26 style27 s style27" colspan="8"><input type="text" projet="a renseigner" placeholder="a renseigner" style="text-align:center ;"></td>  <!--code a re-travailler ici-->
            
            
          </tr>
          <tr class="row5">
            <td class="column0 style7 s">Nb jours ouvrés</td>  <!--code a re-travailler ici-->
            <td class="column1 style22 s"><input type="text" nom="a renseigner" placeholder="a renseigner" style="text-align:center ;"></td>  <!--code a re-travailler ici-->
            <td class="column2 style1 null">&nbsp;</td>
            <td class="column3 style1 null">&nbsp;</td>
            <td class="column4 style9 null"></td>
            <td class="column5 style9 null"></td>
            <td class="column6 style10 null"></td>
            <td class="column7 style1 null">&nbsp;</td>
            <td class="column8 style1 null">&nbsp;</td>
            <td class="column9 style1 null">&nbsp;</td>
            <td class="column10 style1 null">&nbsp;</td>
            <td class="column11 style1 null">&nbsp;</td>
            <td class="column12 style1 null">&nbsp;</td>
            <td class="column13 style1 null">&nbsp;</td>
            <td class="column14 style1 null">&nbsp;</td>
            <td class="column15 style1 null">&nbsp;</td>
            <td class="column16 style1 null">&nbsp;</td>
            <td class="column17 style1 null">&nbsp;</td>
            <td class="column18 style1 null">&nbsp;</td>
            <td class="column19 style1 null">&nbsp;</td>
            <td class="column20 style1 null">&nbsp;</td>
            <td class="column21 style1 null">&nbsp;</td>
            <td class="column22 style26 s style26" colspan="4">Intervenant</td>  <!--code a re-travailler ici-->
            <td class="column26 style32 s style34" colspan="8"><input type="text" nom="votre nom a renseigner" placeholder="votre nom a renseigner" style="text-align:center ;"></td>  <!--code a re-travailler ici-->
            
            
          </tr>
          <tr class="row6">
            <td class="column0 style2 null"></td>
            <td class="column1 style2 null"></td>
            <td class="column2 style1 null">&nbsp;</td>
            <td class="column3 style1 null">&nbsp;</td>
            <td class="column4 style1 null">&nbsp;</td>
            <td class="column5 style1 null">&nbsp;</td>
            <td class="column6 style1 null">&nbsp;</td>
            <td class="column7 style1 null">&nbsp;</td>
            <td class="column8 style1 null">&nbsp;</td>
            <td class="column9 style1 null">&nbsp;</td>
            <td class="column10 style1 null">&nbsp;</td>
            <td class="column11 style1 null">&nbsp;</td>
            <td class="column12 style1 null">&nbsp;</td>
            <td class="column13 style1 null">&nbsp;</td>
            <td class="column14 style1 null">&nbsp;</td>
            <td class="column15 style1 null">&nbsp;</td>
            <td class="column16 style1 null">&nbsp;</td>
            <td class="column17 style1 null">&nbsp;</td>
            <td class="column18 style1 null">&nbsp;</td>
            <td class="column19 style1 null">&nbsp;</td>
            <td class="column20 style1 null">&nbsp;</td>
            <td class="column21 style1 null">&nbsp;</td>
            <td class="column22 style1 null">&nbsp;</td>
            <td class="column23 style1 null">&nbsp;</td>
            <td class="column24 style1 null">&nbsp;</td>
            <td class="column25 style1 null">&nbsp;</td>
            <td class="column26 style1 null">&nbsp;</td>
            <td class="column27 style1 null">&nbsp;</td>
            <td class="column28 style1 null">&nbsp;</td>
            <td class="column29 style1 null">&nbsp;</td>
            <td class="column30 style1 null">&nbsp;</td>
            <td class="column31 style1 null">&nbsp;</td>
            <td class="column32 style1 null">&nbsp;</td>
            <td class="column33 style11 null"></td>
            
            
          </tr>
          <tr class="row7">
            <td class="column0 style30 s style30" colspan="2">Activités</td>  <!--code a re-travailler ici-->
            <td class="column2 style12 f">Sat 1</td>
            <td class="column3 style12 f">Sun 2</td>
            <td class="column4 style12 f">Mon 3</td>
            <td class="column5 style12 f">Tue 4</td>
            <td class="column6 style12 f">Wed 5</td>
            <td class="column7 style12 f">Thu 6</td>
            <td class="column8 style12 f">Fri 7</td>
            <td class="column9 style12 f">Sat 8</td>
            <td class="column10 style12 f">Sun 9</td>
            <td class="column11 style12 f">Mon 10</td>
            <td class="column12 style12 f">Tue 11</td>
            <td class="column13 style12 f">Wed 12</td>
            <td class="column14 style12 f">Thu 13</td>
            <td class="column15 style12 f">Fri 14</td>
            <td class="column16 style12 f">Sat 15</td>
            <td class="column17 style12 f">Sun 16</td>
            <td class="column18 style12 f">Mon 17</td>
            <td class="column19 style12 f">Tue 18</td>
            <td class="column20 style12 f">Wed 19</td>
            <td class="column21 style12 f">Thu 20</td>
            <td class="column22 style12 f">Fri 21</td>
            <td class="column23 style12 f">Sat 22</td>
            <td class="column24 style12 f">Sun 23</td>
            <td class="column25 style12 f">Mon 24</td>
            <td class="column26 style12 f">Tue 25</td>
            <td class="column27 style12 f">Wed 26</td>
            <td class="column28 style12 f">Thu 27</td>
            <td class="column29 style12 f">Fri 28</td>
            <td class="column30 style12 f">Sat 29</td>
            <td class="column31 style12 f">Sun 30</td>
            <td class="column32 style12 f">Mon 31</td>
            <td class="column33 style13 f">31 ou total?</td>
            
            
          </tr>
          <tr class="row8">
            <td class="column0 style35 s style35" colspan="2"><input type="text" name="nom client" placeholder="nom du client" ></td>  <!--code a re-travailler ici-->
            <td class="column2 style14 null"><select name="test">

<option>JT </option>
<option>CP</option>
<option>AR</option>
<option>CHP</option>

</select></td>
            <td class="column3 style14 null"><input name="info">
            <td class="column4 style14 null"><?php
echo "<textarea name=\"mydata\">\n";
echo htmlspecialchars($data)."\n";
echo '</textarea>';
?>
            <td class="column5 style14 null">
            <input type="click" name="MonTableau[]" />
            <td class="column6 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column7 style14 null">$j<select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column8 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column9 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column10 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column11 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column12 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column13 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column14 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column15 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column16 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column17 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column18 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column19 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column20 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column21 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column22 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column23 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column24 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column25 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column26 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column27 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column28 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column29 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column30 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column31 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
            <td class="column32 style14 null"><select name="test">

<option>1 </option>
<option>2</option>
<option>3</option>

</select></td>
<input type="text" mois="a renseigner" placeholder="a renseigner" style="text-align:center ;">
            <td class="column33 style15 f">0</td>
            
            
          </tr>
          <tr class="row9">
            <td class="column0 style31 null style31" colspan="2"></td>
            <td class="column2 style14 null"></td>
            <td class="column3 style14 null"></td>
            <td class="column4 style14 null"></td>
            <td class="column5 style14 null"></td>
            <td class="column6 style14 null"></td>
            <td class="column7 style14 null"></td>
            <td class="column8 style14 null"></td>
            <td class="column9 style14 null"></td>
            <td class="column10 style14 null"></td>
            <td class="column11 style14 null"></td>
            <td class="column12 style14 null"></td>
            <td class="column13 style14 null"></td>
            <td class="column14 style14 null"></td>
            <td class="column15 style14 null"></td>
            <td class="column16 style14 null"></td>
            <td class="column17 style14 null"></td>
            <td class="column18 style14 null"></td>
            <td class="column19 style14 null"></td>
            <td class="column20 style14 null"></td>
            <td class="column21 style14 null"></td>
            <td class="column22 style14 null"></td>
            <td class="column23 style14 null"></td>
            <td class="column24 style14 null"></td>
            <td class="column25 style14 null"></td>
            <td class="column26 style14 null"></td>
            <td class="column27 style14 null"></td>
            <td class="column28 style14 null"></td>
            <td class="column29 style14 null"></td>
            <td class="column30 style14 null"></td>
            <td class="column31 style14 null"></td>
            <td class="column32 style14 null"></td>
            <td class="column33 style15 f">0</td>
            
            
          <!-- </tr>
          <tr class="row10">
            <td class="column0 style31 null style31" colspan="2"></td>
            <td class="column2 style14 null"></td>
            <td class="column3 style14 null"></td>
            <td class="column4 style14 null"></td>
            <td class="column5 style14 null"></td>
            <td class="column6 style14 null"></td>
            <td class="column7 style14 null"></td>
            <td class="column8 style14 null"></td>
            <td class="column9 style14 null"></td>
            <td class="column10 style14 null"></td>
            <td class="column11 style14 null"></td>
            <td class="column12 style14 null"></td>
            <td class="column13 style14 null"></td>
            <td class="column14 style14 null"></td>
            <td class="column15 style14 null"></td>
            <td class="column16 style14 null"></td>
            <td class="column17 style14 null"></td>
            <td class="column18 style14 null"></td>
            <td class="column19 style14 null"></td>
            <td class="column20 style14 null"></td>
            <td class="column21 style14 null"></td>
            <td class="column22 style14 null"></td>
            <td class="column23 style14 null"></td>
            <td class="column24 style14 null"></td>
            <td class="column25 style14 null"></td>
            <td class="column26 style14 null"></td>
            <td class="column27 style14 null"></td>
            <td class="column28 style14 null"></td>
            <td class="column29 style14 null"></td>
            <td class="column30 style14 null"></td>
            <td class="column31 style14 null"></td>
            <td class="column32 style14 null"></td>
            <td class="column33 style15 f">0</td>
            
            
          </tr>
          <tr class="row11">
            <td class="column0 style31 null style31" colspan="2"></td>
            <td class="column2 style14 null"></td>
            <td class="column3 style14 null"></td>
            <td class="column4 style14 null"></td>
            <td class="column5 style14 null"></td>
            <td class="column6 style14 null"></td>
            <td class="column7 style14 null"></td>
            <td class="column8 style14 null"></td>
            <td class="column9 style14 null"></td>
            <td class="column10 style14 null"></td>
            <td class="column11 style14 null"></td>
            <td class="column12 style14 null"></td>
            <td class="column13 style14 null"></td>
            <td class="column14 style14 null"></td>
            <td class="column15 style14 null"></td>
            <td class="column16 style14 null"></td>
            <td class="column17 style14 null"></td>
            <td class="column18 style14 null"></td>
            <td class="column19 style14 null"></td>
            <td class="column20 style14 null"></td>
            <td class="column21 style14 null"></td>
            <td class="column22 style14 null"></td>
            <td class="column23 style14 null"></td>
            <td class="column24 style14 null"></td>
            <td class="column25 style14 null"></td>
            <td class="column26 style14 null"></td>
            <td class="column27 style14 null"></td>
            <td class="column28 style14 null"></td>
            <td class="column29 style14 null"></td>
            <td class="column30 style14 null"></td>
            <td class="column31 style14 null"></td>
            <td class="column32 style14 null"></td>
            <td class="column33 style15 f">0</td>
            
            
          </tr>
          <tr class="row12">
            <td class="column0 style31 null style31" colspan="2"></td>
            <td class="column2 style14 null"></td>
            <td class="column3 style14 null"></td>
            <td class="column4 style14 null"></td>
            <td class="column5 style14 null"></td>
            <td class="column6 style14 null"></td>
            <td class="column7 style14 null"></td>
            <td class="column8 style14 null"></td>
            <td class="column9 style14 null"></td>
            <td class="column10 style14 null"></td>
            <td class="column11 style14 null"></td>
            <td class="column12 style14 null"></td>
            <td class="column13 style14 null"></td>
            <td class="column14 style14 null"></td>
            <td class="column15 style14 null"></td>
            <td class="column16 style14 null"></td>
            <td class="column17 style14 null"></td>
            <td class="column18 style14 null"></td>
            <td class="column19 style14 null"></td>
            <td class="column20 style14 null"></td>
            <td class="column21 style14 null"></td>
            <td class="column22 style14 null"></td>
            <td class="column23 style14 null"></td>
            <td class="column24 style14 null"></td>
            <td class="column25 style14 null"></td>
            <td class="column26 style14 null"></td>
            <td class="column27 style14 null"></td>
            <td class="column28 style14 null"></td>
            <td class="column29 style14 null"></td>
            <td class="column30 style14 null"></td>
            <td class="column31 style14 null"></td>
            <td class="column32 style14 null"></td>
            <td class="column33 style15 f">0</td>
             -->
            
          </tr>
          <tr class="row13">
            <td class="column0 style29 s style29" colspan="2">Absences CP</td>  <!--code a re-travailler ici-->
            <td class="column2 style14 null"></td>
            <td class="column3 style14 null"></td>
            <td class="column4 style14 null"></td>
            <td class="column5 style14 null"></td>
            <td class="column6 style14 null"></td>
            <td class="column7 style14 null"></td>
            <td class="column8 style14 null"></td>
            <td class="column9 style14 null"></td>
            <td class="column10 style14 null"></td>
            <td class="column11 style14 null"></td>
            <td class="column12 style14 null"></td>
            <td class="column13 style14 null"></td>
            <td class="column14 style14 null"></td>
            <td class="column15 style14 null"></td>
            <td class="column16 style14 null"></td>
            <td class="column17 style14 null"></td>
            <td class="column18 style14 null"></td>
            <td class="column19 style14 null"></td>
            <td class="column20 style14 null"></td>
            <td class="column21 style14 null"></td>
            <td class="column22 style14 null"></td>
            <td class="column23 style14 null"></td>
            <td class="column24 style14 null"></td>
            <td class="column25 style14 null"></td>
            <td class="column26 style14 null"></td>
            <td class="column27 style14 null"></td>
            <td class="column28 style14 null"></td>
            <td class="column29 style14 null"></td>
            <td class="column30 style14 null"></td>
            <td class="column31 style14 null"></td>
            <td class="column32 style14 null"></td>
            <td class="column33 style15 f">0</td>
            
            
          </tr>
          <tr class="row14">
            <td class="column0 style30 s style30" colspan="2">TOTAL</td>  
            <td class="column2 style16 f">0</td>
            <td class="column3 style16 f">0</td>
            <td class="column4 style16 f">0</td>
            <td class="column5 style16 f">0</td>
            <td class="column6 style16 f">0</td>
            <td class="column7 style16 f">0</td>
            <td class="column8 style16 f">0</td>
            <td class="column9 style16 f">0</td>
            <td class="column10 style16 f">0</td>
            <td class="column11 style16 f">0</td>
            <td class="column12 style16 f">0</td>
            <td class="column13 style16 f">0</td>
            <td class="column14 style16 f">0</td>
            <td class="column15 style16 f">0</td>
            <td class="column16 style16 f">0</td>
            <td class="column17 style16 f">0</td>
            <td class="column18 style16 f">0</td>
            <td class="column19 style16 f">0</td>
            <td class="column20 style16 f">0</td>
            <td class="column21 style16 f">0</td>
            <td class="column22 style16 f">0</td>
            <td class="column23 style16 f">0</td>
            <td class="column24 style16 f">0</td>
            <td class="column25 style16 f">0</td>
            <td class="column26 style16 f">0</td>
            <td class="column27 style16 f">0</td>
            <td class="column28 style16 f">0</td>
            <td class="column29 style16 f">0</td>
            <td class="column30 style16 f">0</td>
            <td class="column31 style16 f">0</td>
            <td class="column32 style16 f">0</td>
            <td class="column33 style15 f">0</td>
            
            
          </tr>
          <tr class="row15">
            <td class="column0 style18 null"></td>
            <td class="column1 style1 null">&nbsp;</td>
            <td class="column2 style1 null">&nbsp;</td>
            <td class="column3 style19 null"></td>
            <td class="column4 style19 null"></td>
            <td class="column5 style19 null"></td>
            <td class="column6 style19 null"></td>
            <td class="column7 style19 null"></td>
            <td class="column8 style19 null"></td>
            <td class="column9 style19 null"></td>
            <td class="column10 style19 null"></td>
            <td class="column11 style19 null"></td>
            <td class="column12 style19 null"></td>
            <td class="column13 style19 null"></td>
            <td class="column14 style19 null"></td>
            <td class="column15 style19 null"></td>
            <td class="column16 style19 null"></td>
            <td class="column17 style19 null"></td>
            <td class="column18 style19 null"></td>
            <td class="column19 style19 null"></td>
            <td class="column20 style19 null"></td>
            <td class="column21 style19 null"></td>
            <td class="column22 style1 null">&nbsp;</td>
            <td class="column23 style19 null"></td>
            <td class="column24 style19 null"></td>
            <td class="column25 style20 null"></td>
            <td class="column26 style19 null"></td>
            <td class="column27 style19 null"></td>
            <td class="column28 style19 null"></td>
            <td class="column29 style19 null"></td>
            <td class="column30 style19 null"></td>
            <td class="column31 style19 null"></td>
            <td class="column32 style19 null"></td>
            <td class="column33 style1 null">&nbsp;</td>
            
            <td class="column35 style21 null"></td>
          </tr>
          <tr class="row16">
            <td class="column0 style28 s style28" colspan="34">&emsp;&emsp;&emsp;&emsp;Signature Client &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  Signature Collaborateur                                                                 
            </td>
            
            
          </tr>
        </tbody>
    </table>
  </body>



  <!--        A PARTIR D'ICI C4EST MA ZONE DE TEST -->



  <table>
  &emsp;
  <textarea>
    zone de signature
  </textarea>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <FORM method=post action="mailto:de.fressine1986@gmail.com?subject=Demande d'informations">
    <TEXTAREA name="nom" rows=4 cols=40 wrap="virtuel">zone pour vous envoyer un message vous étant destinée</TEXTAREA><button>envoyé</button><!--wrap a verifier-->
  </FORM>
  &emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
  <TEXTAREA>
    zone de signature
  </TEXTAREA>
  </table>


  <!-- <select>test du teton</select> -->
  <!-- <input type="select"> -->
  
  <!-- <input type="hidden" > -->

  <select input type="hidden" name="test">

	<option>1</option>
	<option>2</option>
	<option>3</option>

</select>

<FORM id="form1" method="POST" action="page_traitement.php">
   <input type="text"/>
   <input type="submit" value="Valider"/>
</FORM>
<input type="button" value="Afficher/Cacher" onclick="hideThis('form1')" />
  <!-- <form method=post action="mailto:p-h.services@orange.fr?subject=Demande d'informations">
 
<INPUT type="button" name="bouton" value="Nous écrire !">
 
</form> -->
<form name="form">
<input type="button" value="Cacher" onclick="document.form.texte.style.visibility='hidden'">
<input type="button" value="Montrer" onclick="document.form.texte.style.visibility='normal'">
<br><input type="text" name="texte" style="visibility:normal" value="rien">
</form>
  <head>
    <meta charset="utf-8">
    <title>Afficher et masquer un bloc div en fonction de bouton radio</title>
    <style type="text/css">
      .msg{
        margin-top: 25px;
        padding: 25px;
        display: none;
        color: #fff;
      }
      .yellow{ 
        background: yellow; 
      }
      .green{ 
        background: green; 
      }
      .red{ 
        background: red; 
      }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('input[type="radio"]').click(function(){
          var val = $(this).attr("value");
          var target = $("." + val);
          $(".msg").not(target).hide();
          $(target).show();
        });
      });
    </script>
  </head>
  <body>
    <input type="radio" name="color" value="yellow">jaune
    <input type="radio" name="color" value="red">rouge
    <input type="radio" name="color" value="green">vert
    <input type="radio" name="color" value="color">tout
    <div class="yellow msg">Vous avez sélectionné le jaune</div>
    <div class="red msg">Vous avez sélectionné le rouge</div>
    <div class="green msg">Vous avez sélectionné le vert</div>
    <div class="yellow msg" class="red msg" class="green">vous avez tout selectionné</div>
 
    <SELECT NAME="param6">
<OPTION VALUE="1">Première option</OPTION>
<OPTION VALUE="2" SELECTED>Deuxième option</OPTION>
<OPTION VALUE="3">Troisième option</OPTION>
<OPTION VALUE="4">Quatrième option</OPTION>

<form action="action.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>
</SELECT>


<?php
$text = "bonjour :)"; // le texte stocké dans la variable $text
?>
<form action="" method="post">
<input type="text" value="<?php echo $texte; ?>" name="texte"/> <!-- champs de texte contenant le contenu de la variable $text -->
</form>
  </body>
</html>
