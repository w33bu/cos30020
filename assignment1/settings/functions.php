<?php
    function sanitisedInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function cleanTextField($paragraph){
        $paragraph = preg_replace('/\s\s+/', '\n', $paragraph);
        $paragraph = "\"$paragraph\"";
        return $paragraph;
    }

    function isPosIDExist($data, $fileDir){
        $openFile = fopen($fileDir, "r");

        while(!feof($openFile)){
            $eachPostID = substr(fgets($openFile), 0, 5);
            if($eachPostID === $data){
                return true;
            }
        }
        fclose($openFile);
        return false;
    }


    function displayErrMessage($errMsg){
        $dataAmount = count($errMsg);
        $fieldName = array();
        $reason = array();
        $data = "";

        for($i=0; $i < $dataAmount; $i+=2){
            array_push($fieldName, $errMsg[$i]);
        }

        for($i=1; $i < $dataAmount; $i+=2){
            array_push($reason, $errMsg[$i]);
        }


        for($i=0; $i < count($reason); $i++){
            $data .= "
            <li>
                <p><strong>".$fieldName[$i].":</strong></p>
                <ul><li><p><em>".$reason[$i].".</em></p></li></ul>
            </li>";
        }

        $displayError = "<nav class='errorBox'>
        <h3><strong>Cannot procces request.</strong></h3>
        <h4><em>The following need to changed:</em></h4>
        <ul>
            ".$data."
        </ul>
        </nav>
        ";
        return $displayError;
    }

    function sortDate($date1, $date2)
    {
        echo "UNIX:<br>";
        echo "DeadLine: $date1<br>Date Now: $date2<br><br>";
        echo "DeadLine: ".strtotime(str_replace('/','-',$date1))."<br>Date Now:".strtotime(str_replace('/','-',$date2))."<hr>";
        if (strtotime(str_replace('/','-',$date1)) < strtotime(str_replace('/','-',$date2))) {
            return false;
        } elseif (strtotime(str_replace('/','-',$date1)) > strtotime(str_replace('/','-',$date2))) {
            return true;
        }
    }

    function temp_sortDate($deadLine, $currDate){
        $arrDeadLine = explode("/", $deadLine);
        $arrcurrDate = explode("/", $currDate);

        if($arrcurrDate[0] > $arrDeadLine[0]){
            return false;
        }else{
            return true;
        }
    }
    
	  function showNextPosID($fileDir, $dir){
        if(!file_exists($fileDir)){
            umask(0007);
            
            if(!file_exists($dir))
                mkdir($dir, 02770);

            $fileOpen = fopen($fileDir, "w");
            fclose($fileOpen);
        }

        $count = 0;
        $openFile = fopen($fileDir, "r");

        while(!feof($openFile)){
            $getLastID = substr(fgets($openFile), 1, 4);

            if($count <= intval($getLastID)){
                $count++;
            }else{
                $value = (int)$getLastID + (int)$count;
                return "P".strval(sprintf("%'.04d\n", $value));
            }
        }
        fclose($openFile);
    }

    function displayJobVacancy($findString, $fileDir, $regex){
        $currentDate = date("d/m/y");
        $findString = ucwords(strtolower(sanitisedInput($findString)));
        $eachLineData = "";
        $handle = fopen($fileDir, "r");

        if(is_readable($fileDir)){
            while(!feof($handle)){
                $listData = list($posID, $jobTitle, $jobDesc, $jobClosingDate, $jobPosition, $jobContract, $jobAcceptBy, $jobLocation) = array_pad(explode("\t", fgets($handle)), 8, null);
				
                if(temp_sortDate($jobClosingDate, $currentDate)) {
                    if ($findString != "") {
                        foreach ($listData as $data) {
                            if (preg_match($regex, $data)) {
                                if (preg_match("/(?i)$findString/", $data)) {
                                    $eachLineData .= "
                                    <nav class=\"result\">
                                    <p class=\"title\"><strong>".$jobTitle."</strong></p>
                                    <p><strong> Description: </strong>".$jobDesc."</p>
                                    <p><strong> Closing Date: </strong>".$jobClosingDate."</p>
                                    <p><strong> Position: </strong>".$jobPosition."</p>
                                    <p><strong> Contract: </strong>".$jobContract."</p>
                                    <p><strong> Apply by: </strong>".$jobAcceptBy."</p>
                                    <p><strong> Location: </strong>".$jobLocation."</p>
                                    </nav>
                                    <hr>
                                    ";
                                }
                            }
                        }
                    } elseif ($findString == "") {
                        if ($posID != null) {
                            $eachLineData .= "
                            <nav class=\"result\">
                            <p class=\"title\"><strong>".$jobTitle."</strong></p>
                            <p><strong> Description: </strong>".$jobDesc."</p>
                            <p><strong> Closing Date: </strong>".$jobClosingDate."</p>
                            <p><strong> Position: </strong>".$jobPosition."</p>
                            <p><strong> Contract: </strong>".$jobContract."</p>
                            <p><strong> Apply by: </strong>".$jobAcceptBy."</p>
                            <p><strong> Location: </strong>".$jobLocation."</p>
                            </nav>
                            <hr>
                            ";
                        }
                    }
                }
            }
            fclose($handle);
        }
        if($eachLineData != ""){
            $headingTitle = "<h3><strong>We found the following result in our database.</strong></h3>";
        }else{
            $headingTitle = "<h3><strong>We cannot found any result in our database.</strong></h3>";
            $eachLineData = "<p>Please try checking your spelling and or contact system admin if problem persist.</p>";
        }
        return $headingTitle.$eachLineData;
    }
?>
