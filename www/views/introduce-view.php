<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="row">
    <div class="col-xs-6 col-sm-3">
                <span>
                    <img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/introduce/view-1.jpg" alt="" width="240">
                </span>
    </div>
    <div class="col-xs-6 col-sm-3">
                <span>
                    <img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/introduce/view-2.jpg" alt="" width="240">
                </span>
    </div>
    <div class="col-xs-6 col-sm-3">
                <span>
                    <img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/introduce/view-3.jpg" alt="" width="240">
                </span>
    </div>
    <div class="col-xs-6 col-sm-3">
                <span>
                    <img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/introduce/view-4.jpg" alt="" width="240">
                </span>
    </div>
</div>
<h4 class="content-sub-title">관람시간 및 단체관람 안내</h4>
<ul class="list-info">
    <li>
        <dl>
            <dt>
                관람안내
            </dt>
            <dd>
                <ul>
                    <li>관람시간 : 월~금 10:00 ~ 17:00</li>
                    <li>휴관일 : 매주 토, 일요일, 공휴일</li>
                    <li>관람료 : 무료</li>
                </ul>
            </dd>
        </dl>
    </li>
    <li>
        <dl>
            <dt>
                교내 단체관람 신청안내
            </dt>
            <dd>
                <p>원활한 역사관 운영과 안전을 위하여 아래와 같이 단체관람시 사전연락 및 신청서와 함께 공문으로 접수하여 주시기 바랍니다. </p>
                <ul>
                    <li>ㆍ단체관람 : 교내외 공식적인 행사 및 10인 이상 관람시</li>
                    <li>ㆍ사전연락 : 행사 및 관람 5일전 전화 또는 이메일을 통하여 일정조율</li>
                    <li>ㆍ첨부서류 : 단체관람신청서</li>
                    <li>ㆍ문의 : 박물관 행정팀 대학기록실 (02-2220-2107~8)</li>
                </ul>
            </dd>
        </dl>
    </li>
    <li>
        <dl>
            <dt> 교외 단체관람 신청안내 </dt>
            <dd>
                <p>원활한 역사관 운영과 안전을 위하여 아래와 같이 단체관람시 사전 연락 및 신청서와 함께 메일로 보내주시기 바랍니다.</p>
                <ul>
                    <li>∙단체관람: 중·고등학생 및 일반인</li>
                    <li>∙사전연락: 행사 및 관람 5일전 전화 또는 이메일을 통하여 일정 조율</li>
                    <li>∙첨부서류: 단체관람신청서</li>
                    <li>∙문의: 박물관행정팀 대학기록실(02-2220-2107~8)</li>
                    <li>∙메일주소: <a href="mailto:hyarchives@hanyang.ac.kr" class="link-style">hyarchives@hanyang.ac.kr</a></li>

                </ul>
            </dd>
        </dl>
    </li>
    <li>
        <dl>
            <dt>
                <span>박물관ㆍ역사관</span>
                커리어개발 프로그램
            </dt>
            <dd>
                <strong>운영목적</strong>
                <ul>
                    <li>
                        ㆍ신입생들이 역사관에 방문하여 우리 대학의 역사와 가치를 이해하고 소속감과 자긍심을 가질 수 있도록 함.
                    </li>
                </ul>
            </dd>
            <dd>
                <strong>운영방식</strong>
                <ul>
                    <li>ㆍ커리어 개발 등 수업연계로 각 학과에서 Email 신청</li>
                    <li>ㆍ30명 이상 시 박물관 집합 후 박물관/역사관 2팀으로 나누어 진행.</li>
                </ul>
            </dd>
            <dd>
                <strong>상세운영계획 (총 1시간)</strong>
                <ul>
                    <li>ㆍ00:00 박물관 2층 세미나실 집합</li>
                    <li>ㆍ00:05 학과 담당 조교 출석체크 (필요시)</li>
                    <li>ㆍ00:10 박물관 및 역사관의 연혁 및 활동 소개 (PPT)</li>
                    <li>ㆍ00:30 박물관 기획특별전 및 상설전 관람</li>
                    <li>ㆍ00:35 역사관 이동</li>
                    <li>ㆍ00:55 역사관 관람</li>
                    <li>ㆍ00:60 단체사진 촬영 후 해산</li>
                </ul>
            </dd>
        </dl>
    </li>
    <!--
    <li>
        <dl>
            <dt>
                꼭 지켜주세요!
            </dt>
            <dd>
                <p>역사관은 공공장소이므로 다음과 같은 사항을 지켜 주십시오.</p>
                <ol class="list-style-decimal">
                    <li>음료 및 음식물 반입을 삼가해 주세요.</li>
                    <li>건물 안에서는 금연입니다.</li>
                    <li>유물사진 촬영 때는 플래시를 삼가해 주세요.</li>
                    <li>휴대전화는 진동으로 해주세요.</li>
                    <li>전시물은 손을 대지 말고 눈으로만 보세요.</li>
                    <li>큰소리로 떠들거나 뛰어다니는 행위를 삼가해 주세요.</li>
                </ol>
            </dd>
        </dl>
    </li>
    -->
    <li>
        <dl>
            <dt>
                관람문의
            </dt>
            <dd>
                연락처 : 2220. 2107-8,  박물관 행정팀 대학기록실
            </dd>
        </dl>
    </li>
</ul>
<p class="text-center next-content">
<!--    <a href="#none" class="btn btn-custom-one spacing-10">역사관 단체관람 신청서 다운로드</a>-->
    <a href="#none" class="btn btn-custom-one spacing-10">커리어 개발 신청서</a>
</p>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>


<img src="<?php echo $config["resourcesDir"]; ?>/images/part/sub-page/museum-pc.png" alt="한양대학교 역사관의 어제와 오늘" width="232" class="museum-pc visible-md">

