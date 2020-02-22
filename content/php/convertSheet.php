<?php


/*function Usage():
    print("Usage")
    print("")
    print("-h, --help; show this documentation")
    print("-i, --input <file>; path to input file")
    print("-o, --output <file>; path to output file, should not exist")
    print("-c, --complete; change the sheet to use v1.9 SDK, may change the look of some items.")
    print("-m, --minimal; change the sheet to make it work on v1.9")
*/


function createNewField($data) {
    $newKeys=array("additionnalBottomCode","additionnalHeadCode","additionnalImport");
    foreach( $newKeys as &$key)
    {
        if(in_array($key, $data))
        {
            $data[$newKey]="";
        }
    }
    return $data;
}


function uuidAndPageCount($data,$key,$pageCount)
{
    $data['uuid']=$key;
    $data['pageCount']=$pageCount;
    return $data;
}


function updateImage($data) {
    $key="";
    $pageCount=0;
    foreach( $data['background'] as &$p)
    {
        $p['filename']="";
        $p['isBg']=True;
        $pageCount+=1;
        if( strlen($key) == 0)
        {
            $tmp=$p['key'];
            $key=substr($tmp,0,strpos($tmp,"_"));
        }
        else
        {
            $tmp=$p['key'];
            $p['key']=sprintf("%d%d", $key, substr($tmp,strpos($tmp,"_")));
        }
    }

  return array($data, $key, $pageCount);
}


function qmlIncludeMinimal($data)
{
    #print("qmlIncludeMinimal")
    $pattern="import \"qrc:/resources/qml/\"";
    $newPat="import Rolisteam 1.0";
    $qml = $data['qml'];
    $qml = str_replace($pattern, $newPat,$qml);
    $data['qml'] = $qml;
    return $data;
}

function qmlIncludeComplete($data)
{
    #print("qmlIncludeComplete")
    $pattern="import \"qrc:/resources/qml/\"";
    $newPat="import Rolisteam 1.1";
    $qml = $data['qml'];
    $qml = str_replace($pattern, $newPat,$qml);
    $data['qml'] = $qml;
    return $data;
}

function changeDiceButton($data)
{
    #print("DiceButton")
    $qml = $data['qml'];
    $inCheck=false;
    $result=[];
    $linesArray = explode("\n",$qml);
    foreach( $linesArray as $line)
    {
        if(strpos($line, "DiceButton")>-1)
        {
            $inCheck=True;
        }
        if(strpos($line,"textColor")>-1 && $inCheck)
        {
            $line=str_replace("textColor","color",$line);
        }
        else if(strpos($line,"color:")>-1 && $inCheck)
        {
            $line=str_replace("color","backgroundColor",$line);
            $inCheck=False;
        }
        $result[] = $line;
      }

    $data['qml']=implode("\n",$result);
    return $data;
}

function changeTextFieldField($data)
{
    #print("TextFieldField")
    $qml = $data['qml'];
    $inCheck=False;
    $result=[];
    $linesArray = explode("\n",$qml);
    foreach ($linesArray as $line)
    {
        if(strpos($line,"TextFieldField")>-1)
        {
              $inCheck=True;
        }
        if(strpos($line,"textColor")>-1 && $inCheck)
        {
          $line=str_replace("textColor","color",$line);
        }
        else if(strpos($line,"color:")>-1 && $inCheck)
        {
          $line=str_replace("color","backgroundColor",$line);
            $inCheck=False;
        }
        $result[] = $line;
    }
    $data['qml']=implode("\n",$result);
    return $data;
  }

function changeTextArea($data)
{
    #print("changeTextArea")
    $qml = $data['qml'];
    $inCheck=False;
    $result=[];
    $linesArray = explode("\n",$qml);
    foreach ($linesArray as $line)
    {
        if(strpos($line,"TextAreaField")>-1)
        {
            $inCheck=True;
        }
        if(strpos($line,"textColor")>-1 && $inCheck)
        {
          $line=str_replace("textColor","color",$line);
        }
        else if(strpos($line,"color:")>-1 && $inCheck)
        {
          $line=str_replace("color","backgroundColor",$line);
          $inCheck=False;
        }
        $result[] = $line;
    }

    $data['qml']=implode("\n",$result);
    return $data;
}

function changeCheckbox($data)
{
    #print("changeCheckbox")
    $qml = $data['qml'];
    $inCheck=False;
    $result=[];
    $linesArray = explode("\n",$qml);
    foreach ($linesArray as $line)
    {
      if(strpos($line,"CheckBoxField")>-1)
      {
          $inCheck=True;
      }
      if(strpos($line,"textColor")>-1 && $inCheck)
      {
        $line=str_replace("textColor","borderColor",$line);
      }
      else if(strpos($line,"color:")>-1 && $inCheck)
      {
          $line="\n";
          $inCheck=False;
      }
      $result[] = $line;
    }
    $data['qml']=implode("\n",$result);
    return $data;
  }

function changeTextInputField($data)
{
    #print("changeTextInputField")
    $qml = $data['qml'];
    $inCheck=False;
    $result=[];
    $linesArray = explode("\n",$qml);
    foreach ($linesArray as $line)
    {
      if(strpos($line,"TextInputField")>-1)
      {
          $inCheck=True;
      }
      if(strpos($line,"textColor")>-1 && $inCheck)
      {
        $line=str_replace("textColor","color",$line);
      }
      else if(strpos($line,"color:")>-1 && $inCheck)
      {
        $line=str_replace("color","backgroundColor",$line);
          $inCheck=False;
      }
      $result[] = $line;
    }
    $data['qml']=implode("\n",$result);
    return $data;
}

function completeChange($data)
{
    $array = updateImage($data);
    $data = $array[0];
    $key = $array[1];
    $pageCount = $array[2];
    $data = uuidAndPageCount($data,$key,$pageCount);
    $data = qmlIncludeComplete($data);
    $data = changeCheckbox($data);
    $data = changeTextInputField($data);
    $data = changeTextArea($data);
    $data = changeTextFieldField($data);
    $data = changeDiceButton($data);
    return $data;
}

function minimalChange($data)
{
    $array = updateImage($data);
    $data = $array[0];
    $key = $array[1];
    $pageCount=$array[2];
    $data = uuidAndPageCount($data,$key,$pageCount);
    $data = qmlIncludeMinimal($data);
    return $data;
}

function loadFile($path)
{
  $handle=file_get_contents($path);
  $data=json_decode($handle,True);
  //print_r($data);
  return $data;
}

function saveFile($path,$data)
{
    $handle= fopen($path, 'w');
    fwrite($handle, json_encode($data));
    fclose($handle);
}

function main()
{
  $ModeEdition_NONE = 0;
  $ModeEdition_MINIMAL = 1;
  $ModeEdition_COMPLETE = 2;

    $mode=$_POST['complete']=="checked" ? $ModeEdition_COMPLETE : $ModeEdition_MINIMAL;
    $inputFile=$_FILES['source']['tmp_name'];
    $outputFile=str_replace(".rcs",'_fixed.rcs',$_FILES['source']['name']);

    if ($mode == $ModeEdition_NONE)
        echo ("Error: no edition mode: minimal or complete");

    $data=loadFile($inputFile);

    if ($mode == $ModeEdition_MINIMAL)
      $data = minimalChange($data);
    else if ($mode == $ModeEdition_COMPLETE)
        $data = completeChange($data);

    //print_r(json_encode($data));
    //saveFile($outputFile, $data);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($outputFile).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    print_r(json_encode($data, JSON_PRETTY_PRINT));
    exit(0);

}
//print_r($_POST);
//print_r($_FILES);
if(!empty($_POST['convert']))
  main();
?>

<html>
<header>
</header>
<body>
  <p>This tool offers you a simple way to convert Charactersheet from Rolisteam v1.8 to the new 1.9 standard.</p>
  <form method="post" action="" enctype="multipart/form-data">
    <input type="file" value="" id="source" name="source"/><br/>
    <label for="complete">Use 1.9 style:</label><input type="checkbox" id="complete" name="complete" value="checked"/><br/>
    <input type="submit" name="convert" value="convert" id="convert" /><br/>
  </form>
</body>
</html>
