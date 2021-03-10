
//(c) Copyright Modelworks Software 2005 - All rights reserved

var XMLHttpRequestObject = new Array();
var prog, newimg, boundles;

function onAjaxHome(type,status)
{


    if (XMLHttpRequestObject == null)
    {
        XMLHttpRequestObject = new Array();
    }


    var requestObject = GetXMLHttpRequest();
    if (requestObject)
    {
        XMLHttpRequestObject[type] = new Object();
        XMLHttpRequestObject[type].requestObject = requestObject;


        requestObject.onreadystatechange = new Function ("OnAjaxHomeProcess('" + type + "')");

        var url = "/uqu/ajaxhomeservlet?" + "type="+type+"&status="+status;

        requestObject.open("GET", url, true);
        requestObject.setRequestHeader( "Content-Type" ,
            "application/x-www-form-urlencoded; charset=windows-1256" );
        requestObject.send("");
    }

}

function OnAjaxHomeProcess(type)
{


    if (XMLHttpRequestObject[type] != null &&
        XMLHttpRequestObject[type].requestObject &&
        XMLHttpRequestObject[type].requestObject.readyState == 4)
    {

        if (XMLHttpRequestObject[type].requestObject.status == 200)
        {
            var result = XMLHttpRequestObject[type].requestObject.responseText;

            if (result == "busy")
            {
                alert("The server is busy. Try again.");
                XMLHttpRequestObject[type] = null;
            }
            else{}
        }
        else
        {
            alert("Request failed: " + XMLHttpRequestObject[type].requestObject.status + " status returned");
        }
    }

}

function GetXMLHttpRequest()
{
    var object = null;

    if (window.XMLHttpRequest)
    {
        object = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
        try
        {
            object = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e)
        {
        }

        if (object == null)
        {
            try
            {
                object = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e)
            {
            }
        }
    }

    if (object == null)
    {
        alert("Your browser does not support AJAX");
    }

    return object;
}


