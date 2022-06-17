<?php
/*
 * $_SERVER 환경변수 정리
 * 공식매뉴얼 link https://www.php.net/manual/en/reserved.variables.server
 *
 * 자주 사용하는 $_SERVER 변수 정리
 * echo $_SERVER['DOCUMENT_ROOT'] . '<br>';     // 서버의 구성 파일에 정의 된대로 현재 스크립트가 실행중인 문서 루트 디렉토리
 * echo $_SERVER['REMOTE_ADDR'] . '<br>';       // 사용자가 현재 페이지를 보고있는 IP 주소
 * echo $_SERVER['SERVER_ADDR'] . '<br>';       // 현재 스크립트가 실행중인 서비스의 IP 주소
 * echo $_SERVER['HTTP_REFERER'] . '<br>';      // 사용자 에이전트를 현재 페이지로 참조한 페이지의 주소(요청 주소)
 * echo $_SERVER['SERVER_NAME'] . '<br>';       // 현재 스크립트가 실행중인 서버 호스트의 이름
 * echo $_SERVER['HTTP_HOST'] . '<br>';         // 현재 요청의 Host
 * echo $_SERVER['SERVER_PORT'] . '<br>';       // 웹 서버가 통신을 위해 사용중인 서버 시스템 포트
 * echo $_SERVER['REQUEST_URI'] . '<br>';       // 이 페이지에 엑세스 하기 위해 제공된 URI
 * echo $_SERVER['PHP_SELF'] . '<br>';          // 문서 루트를 기준으로 현재 실행중인 스크립트 파일 이름
 * echo $_SERVER['QUERY_STRING'] . '<br>';      // 페이지에 액세스 한 쿼리 문자열
 */

// 현재 $_SERVER 변수에 세팅된 key/value 데이터 확인
foreach ($_SERVER as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}