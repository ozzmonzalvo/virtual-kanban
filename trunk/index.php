<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML>
<!--

Copyright (C) 2010  Leandro Vázquez Cervantes (leandro[-at-]leandro[-dot-]org)
Copyright (C) 2010  Octavio Benedí Sánchez (octaviobenedi[-at-]gmail[-dot-]com)

This program is free software:
you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY;
without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/.

version 0.2b 13/11/2010

-->

<HEAD>
    <META NAME="generator" CONTENT="HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org">

    <TITLE>Virtual Kanban, an online resource to build and share your kanban boards</TITLE>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <META NAME="keywords" CONTENT="kanban, agile, dashboard, board, SCRUM, visual kanban, virtual kanban, lean, tablero, tablero kanban">
    <META NAME="description" CONTENT="Virtual kanban is a free online tool, like a phisycal kanban board, for composing your own board online in order to get informed about and control your production proccess">
    <SCRIPT SRC="js/jquery.min.js" TYPE="text/javascript">
</SCRIPT>
    <SCRIPT TYPE="text/javascript" SRC="js/virtual-kanban.js">
</SCRIPT>
    <SCRIPT SRC="js/jquery-ui.min.js" TYPE="text/javascript">
</SCRIPT>
    <LINK REL="stylesheet" HREF="css/virtual-kanban.css" TYPE="text/css" MEDIA="all">
    <LINK REL="stylesheet" HREF="css/jquery-ui.css" TYPE="text/css" MEDIA="all">
</HEAD>

<BODY STYLE="background-color:white">
    <TABLE WIDTH="99%">
        <TR>
            <TD ALIGN="left" WIDTH="50%"><SMALL>See <A NAME="top" HREF="http://blog.virtualkanban.net" ID="top">the blog</A> for news &amp; updates!</SMALL></TD>

            <TD ALIGN="right"><SMALL>version 0.2b</SMALL></TD>
        </TR>
    </TABLE>

    <TABLE ALIGN="center" ID="cabecera">
        <TR>
            <TD COLSPAN="2" ALIGN="center">
                <H1 STYLE="color:silver; font-size:16px">One-File-HTML Kanban boards online and offline!</H1>
            </TD>
        </TR>

        <TR>
            <TD>
                <H1><IMG SRC="img/logo.png" BORDER="0" ALT="Virtual Kanban"></H1>
            </TD>

            <TD VALIGN="top"><IMG SRC="img/beta.png" BORDER="0" ALT="beta"></TD>
        </TR>
    </TABLE>

    <P ALIGN="center"><INPUT VALUE="new task" ID="add" TYPE="button"> number of columns <INPUT TYPE="text" ID="n_cols" VALUE="3" SIZE="1" ONCHANGE="draw_cols($(this).val());"> <SMALL><SMALL>(<CODE>TAB</CODE> to apply, from 3 to 7)</SMALL></SMALL></P>

    <DIV CLASS="demo"></DIV>

    <TABLE STYLE="border: medium solid rgb(136, 136, 136);" ID="tabla" ALIGN="center" BORDER="1">
        <THEAD ID="cabec"></THEAD>

        <TBODY ID="cuerp"></TBODY>
    </TABLE>

    <DIV ID="texto">
        <BR>
        <HR>

        <H2>What is kanban?</H2>

        <P><B>Kanban</B> (meaning &quot;<I>signboard</I>&quot; or &quot;<I>billboard</I>&quot;) is a concept related to lean and just-in-time (JIT) production. According to Taiichi Ohno, the man credited with developing Just-in-time (JIT), kanban is one means through which JIT is achieved. <B>Kanban</B> is not an inventory control system. Rather, it is a scheduling system that tells you what to produce, when to produce it, and how much to produce.<BR>
        The need to maintain a high rate of improvements led <I>Toyota</I> to devise the kanban system. Kanban became an effective tool to support the running of the production system as a whole. In addition, it proved to be an excellent way for promoting improvements because reducing the number of kanban in circulation highlighted problem areas.<BR>
        <A HREF="http://en.wikipedia.org/wiki/Kanban">Learn more about Kanban in Wikipedia</A></P><BR>
        <HR>

        <H2>Need Persistence?</H2>

        <P>Modify your board as you want, when you were at your desired situation <B>simply save the webpage at your desktop</B>. It will work there! This way is very easy to distribute and share your board with your mates!</P><BR>
        <HR>

        <H3>TO DO</H3>

        <P><SMALL>* Improve graphics and visual style of the site</SMALL></P>

        <P><SMALL>* Colored cards</SMALL></P>

        <P><SMALL>* <S>Persistence of the boards saving the data in a database</S> we&#39;re thinking about this</SMALL></P>

        <P><SMALL>* Add WIP limits</SMALL></P><BR>
        <HR>
    </DIV>

    <P ALIGN="center" ID="footer"><INPUT TYPE="button" ID="txt_btn" VALUE="show/hide text"><BR>
    <SMALL><A HREF="http://code.google.com/p/virtual-kanban/">Join the proyect, your are welcome!</A> <SMALL>© virtualkanban.net - leandro<SCRIPT TYPE="text/javascript">
document.write('@');
    </SCRIPT>leandro<SCRIPT TYPE="text/javascript">
document.write('.');
    </SCRIPT>org <I>me fecit</I></SMALL><BR>
    <IFRAME SRC="http://www.facebook.com/plugins/like.php?href=http://virtualkanban.net&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" SCROLLING="no" FRAMEBORDER="0" STYLE="border:none; overflow:hidden; width:450px; height:80px;" ALLOWTRANSPARENCY="true"></IFRAME></SMALL></P>
</BODY>
</HTML>
