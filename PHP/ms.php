{\rtf1\ansi\ansicpg1251\cocoartf2513
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fnil\fcharset0 Menlo-Regular;}
{\colortbl;\red255\green255\blue255;\red7\green68\blue184;\red255\green255\blue255;\red27\green31\blue34;
\red6\green33\blue79;\red203\green35\blue57;\red91\green40\blue180;}
{\*\expandedcolortbl;;\cssrgb\c0\c36078\c77255;\cssrgb\c100000\c100000\c100000;\cssrgb\c14118\c16078\c18039;
\cssrgb\c1176\c18431\c38431;\cssrgb\c84314\c22745\c28627;\cssrgb\c43529\c25882\c75686;}
\paperw11900\paperh16840\margl1440\margr1440\vieww10800\viewh8400\viewkind0
\deftab720
\pard\pardeftab720\partightenfactor0

\f0\fs28 \cf2 \cb3 \expnd0\expndtw0\kerning0
<?php\
$address\cf4  = \cf2 $_SERVER\cf4 [\cf5 'REQUEST_URI'\cf4 ];\
\pard\pardeftab720\partightenfactor0
\cf6 switch\cf4  (\cf2 $address\cf4 ) \{\
    \cf6 case\cf4  \cf5 '/'\cf4 :\
        \cf6 echo\cf4  \cf5 '<a href="/welcome">welcome</a>'\cf4 ;\
        \cf6 echo\cf4  \cf5 '<br>'\cf4 ;\
        \cf6 echo\cf4  \cf5 '<a href="/not-found">not-found</a>'\cf4 ;\
        \cf6 break\cf4 ;\
    \cf6 case\cf4  \cf5 '/welcome'\cf4 :\
        \cf6 echo\cf4  \cf5 '<a href="/">main</a>'\cf4 ;\
        \cf6 break\cf4 ;\
    \cf6 default\cf4 :\
        \cf7 header\cf4 (\cf5 "HTTP/1.0 404 Not Found"\cf4 );\
        \cf6 echo\cf4  \cf5 'Page not found. <a href="/">main</a>'\cf4 ;\
        \cf6 break\cf4 ;\
\}\
?>}