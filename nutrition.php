<?php
/*
Template Name: nutrition Plan

*/
get_header(); 
?>

<!-- header-2 -->
<header class="head-wrapper">
        <div class="container">
            <div class="head-top">
                <div class="row  align-items-center">
                    <div class="col col-md-3 col-xxl-3">
                        <div class="logo-head">
                        <svg width="166" height="51" viewBox="0 0 166 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1_2333)">
                        <path d="M45.1655 48.232H40.5003C40.5516 48.1808 40.6028 48.1295 40.6541 48.0783C44.294 44.3366 45.2168 38.6471 43.0124 33.9315C42.0896 31.9838 40.7054 30.5999 38.9111 29.831C36.0401 28.6009 36.1427 27.7808 36.2452 27.0632V27.0119C36.2965 26.6532 36.399 26.3456 36.6041 25.9868C37.4243 24.5004 37.0655 22.1426 36.8604 21.2712C37.3218 18.0421 35.2199 16.5044 35.1174 16.4019C34.861 16.2481 34.6047 16.1456 34.2971 16.1969C33.2718 16.3506 32.7078 17.3758 32.2977 18.1959V18.2471C32.0414 18.7084 31.6313 19.016 31.3749 19.016H31.2724C31.1186 19.016 30.7597 18.7597 30.5034 18.3496C29.7344 17.0682 28.299 16.5557 28.1452 16.5044C27.6838 16.3506 27.1711 16.5044 26.8635 16.9145C25.7356 18.3496 25.7869 20.6049 25.8382 21.425C25.2742 23.2702 25.7869 25.2692 26.6584 26.3969C26.7097 26.4481 26.7097 26.4994 26.761 26.5506C26.761 26.5506 26.761 26.6019 26.7097 26.6019C26.3508 27.5758 25.6844 29.421 26.8635 31.83C27.1198 32.3939 27.8376 32.6501 28.4015 32.3426C28.9654 32.0863 29.2217 31.3687 28.9141 30.8049C28.1964 29.2672 28.6065 28.1908 28.8629 27.3707C28.9654 27.1145 29.0167 26.9094 29.0679 26.7557C29.273 25.9868 28.8116 25.4743 28.6065 25.218C28.5553 25.1667 28.504 25.0642 28.4528 25.013C28.0426 24.5516 27.5812 23.1677 28.0426 21.9888C28.0939 21.8351 28.1452 21.63 28.0939 21.425C28.0426 21.0662 28.0426 20.0923 28.2477 19.221C28.3502 19.3235 28.4528 19.426 28.5553 19.5798C29.273 20.7074 30.2471 21.3225 31.2724 21.3225H31.3749C32.7078 21.3225 33.7844 20.2461 34.2971 19.3235L34.3484 19.2722C34.3484 19.221 34.3996 19.221 34.3996 19.1697C34.6047 19.631 34.7072 20.2461 34.5534 21.1175C34.5022 21.2712 34.5534 21.425 34.5534 21.5788C34.7585 22.5014 34.9123 24.1929 34.5534 24.8592C34.2458 25.423 34.0408 26.0381 33.9382 26.6532V26.7044C33.6819 28.3959 33.9895 30.1898 37.937 31.9325C39.2699 32.4964 40.244 33.4702 40.9104 34.9054C42.7048 38.7496 41.9358 43.414 38.9623 46.4893C37.937 47.5657 36.5015 48.1808 35.1174 48.1808H34.9123C34.7072 48.1808 34.5022 48.1808 34.2971 48.1808C32.1439 48.0783 30.3496 47.5657 28.9141 46.9506C28.6578 46.8481 28.4015 46.7456 28.1964 46.5918C28.1452 46.5918 28.1452 46.5406 28.0939 46.5406C28.0426 46.4893 27.9914 46.4893 27.9401 46.4381C27.3249 46.1305 26.8122 45.7717 26.4534 45.5155C27.8888 43.7215 28.6578 40.9537 28.8629 39.3134C28.8629 39.2109 28.9141 39.1084 28.9141 39.0059C28.9141 38.9034 28.9141 38.8009 28.9141 38.6984V38.5446C28.9141 38.3396 28.9141 37.827 28.9141 37.827C28.9141 37.7758 28.9141 37.6733 28.9141 37.6733C28.8629 36.7506 28.6578 35.828 28.299 34.9567C27.6838 33.4702 26.2996 32.5476 24.7103 32.5476C23.0698 32.5476 21.6856 33.5215 21.0704 35.0592C20.6603 36.0331 20.4552 37.0582 20.4552 38.1346C20.4552 38.6984 20.5065 39.2109 20.609 39.6722C20.8654 41.1074 21.6343 43.824 23.0185 45.618C22.5059 45.9768 21.9419 46.3356 21.3267 46.6431C19.1223 47.7195 16.6103 48.2833 13.8931 48.2833H7.22854V48.1295C7.07474 43.2602 6.61334 28.4984 13.1754 23.9366C19.84 19.2722 20.9679 13.1727 21.7369 8.61094C22.0957 10.4562 22.8647 11.7376 23.9926 12.3526C24.4027 12.5577 24.8128 12.6602 25.2742 12.6602C25.9407 12.6602 26.6072 12.4039 27.1711 11.8913C28.7603 10.5074 29.6831 7.22702 28.4528 2.66521C29.6319 3.07526 30.7085 3.89536 31.4775 4.97174C31.8363 5.43305 32.2977 5.79185 32.9129 5.94561L36.8091 7.022C36.9629 7.07325 37.0142 7.17576 37.0142 7.32953C36.9629 8.71345 36.6041 10.1999 35.8864 10.3537C35.3224 10.5074 34.5534 10.5587 33.7844 10.6612C31.4775 10.9175 28.5553 11.225 27.9401 13.8391C27.7863 14.4542 28.1964 15.0692 28.8116 15.223C29.4268 15.3768 30.042 15.018 30.1958 14.3516C30.4521 13.3778 31.9389 13.1215 34.0408 12.9165C34.861 12.814 35.7326 12.7627 36.4503 12.5577C38.1933 12.0964 39.2187 10.2511 39.3212 7.38079C39.3725 6.15064 38.6035 5.12551 37.4243 4.76672L33.5281 3.69034C33.4768 3.69034 33.4256 3.63908 33.3743 3.58783C31.6825 1.23004 28.9141 -0.153883 26.0945 -0.000114622C24.6078 0.102398 23.2236 0.614961 22.1983 1.48632C22.147 1.48632 22.147 1.53757 22.147 1.53757C21.6343 1.99888 21.1729 2.51144 20.8654 3.12652C20.1989 4.35667 19.9426 5.99687 19.635 7.8421C18.866 12.2501 17.9432 17.7346 11.945 21.9376C4.35763 27.217 4.87029 42.3888 5.02409 48.0783V48.1295H1.12786C0.512662 48.1295 0 48.6421 0 49.2572C0 49.8722 0.512662 50.3848 1.12786 50.3848H13.9957C17.1229 50.3848 19.9426 49.7185 22.4546 48.4883C23.3261 48.027 24.1464 47.5657 24.8128 47.0019C24.9154 47.1044 25.0179 47.1557 25.1204 47.2069C25.3255 47.3607 25.4793 47.4632 25.6844 47.617C25.7869 47.6682 25.8382 47.7195 25.9407 47.7707C26.0945 47.8732 26.197 47.9245 26.3508 48.027C26.4534 48.0783 26.6072 48.1808 26.7097 48.232C26.8635 48.2833 27.0173 48.3858 27.1198 48.4371C29.273 49.5135 31.7338 50.1285 34.3484 50.2823H34.3996C34.8098 50.2823 35.2199 50.3335 35.63 50.3335H45.2168C45.832 50.3335 46.3447 49.821 46.3447 49.2059C46.3447 48.7446 45.832 48.232 45.1655 48.232ZM23.9926 3.07526C24.5565 2.71647 25.223 2.46019 25.992 2.40893C27.3762 6.6632 26.5559 9.43104 25.6844 10.1999C25.3768 10.4562 25.223 10.3537 25.1204 10.3537C24.3515 9.89235 23.4287 7.58581 23.9926 3.07526ZM24.7616 44.029C23.8901 42.8501 23.1723 40.7999 22.916 39.2109C22.8647 38.8521 22.8135 38.4934 22.8135 38.0833C22.8135 37.3145 22.9673 36.5969 23.2749 35.9305L23.3261 35.828C23.6337 35.0592 24.3002 34.8029 24.8128 34.8029C25.0692 34.8029 25.8894 34.8542 26.2483 35.7768C26.5046 36.4431 26.6584 37.1094 26.7097 37.8783C26.7097 37.8783 26.7097 38.2883 26.7097 38.5446V38.6984C26.7097 38.7496 26.7097 38.8009 26.7097 38.8521C26.7097 38.9034 26.7097 38.9547 26.6584 39.0572C26.4534 40.6461 25.6844 42.7989 24.7616 44.029Z" fill="#61BC47"/>
                        <path d="M58.8535 20.3486C62.2884 20.3486 64.1339 23.2702 64.1339 26.4481C64.1339 31.0612 59.9301 33.9315 55.8288 31.8813V38.3908H52.4452V24.6542C52.4452 23.5265 52.599 22.8089 51.3687 22.9114V20.6562C52.9579 20.2974 55.2136 20.2974 55.2136 22.5014C55.8288 21.015 57.3155 20.3486 58.8535 20.3486ZM55.7263 29.0622C58.1358 30.4974 60.6991 29.421 60.6991 26.4481C60.6991 24.9104 59.8788 23.3215 58.1358 23.3215C56.5978 23.3215 55.7263 24.6029 55.7263 25.9868V29.0622Z" fill="black"/>
                        <path d="M77.1555 27.217H69.2093C69.3118 29.011 70.696 29.7285 72.3365 29.8823C72.7979 29.8823 73.3618 29.9336 73.8745 29.8823C74.8998 29.7798 75.9764 29.4723 76.6428 29.1647L77.053 31.625C75.6688 32.2914 74.0795 32.6502 72.5416 32.6502C68.5941 32.7014 65.877 30.3436 65.877 26.3969C65.9282 22.3476 68.9017 20.3999 72.0289 20.3999C76.2327 20.3999 78.0783 23.2703 77.1555 27.217ZM69.2605 25.0642H74.3871C74.4384 23.5265 73.208 23.014 71.9776 23.014C70.696 22.9627 69.5681 23.6803 69.2605 25.0642Z" fill="black"/>
                        <path d="M84.3331 20.7076H88.1268V23.2704H84.3331V27.7809C84.3331 30.19 86.3325 30.3437 88.2806 29.6262L88.5882 32.189C84.5895 33.3166 81.0008 32.6503 81.0008 27.8322V23.2191L78.7964 23.0141V20.7076H81.2572L81.616 17.0684H84.3331V20.7076Z" fill="black"/>
                        <path d="M96.688 14.6592H100.072V21.1175C100.994 20.7074 101.917 20.5537 102.789 20.5537C106.018 20.5537 108.377 23.014 108.377 26.7044C108.377 31.2662 105.198 32.8039 101.661 32.7527C99.969 32.7527 98.2772 32.3939 96.7392 31.83L96.688 14.6592ZM99.969 29.7285C100.687 29.9336 101.353 30.0361 102.02 30.0361C103.763 30.0361 104.993 29.1135 104.993 26.7044C104.993 24.6029 103.763 23.3728 102.225 23.3215C101.558 23.3215 100.789 23.4753 100.02 23.9366L99.969 29.7285Z" fill="black"/>
                        <path d="M121.962 20.7075V28.8573C121.962 29.9336 122.013 30.3437 123.039 30.2412V32.3427C121.398 32.7527 118.784 32.9065 118.784 30.6512C118.117 31.9839 116.528 32.4964 115.041 32.4964C111.658 32.4964 110.684 30.2412 110.684 27.3196V20.6562H114.118V27.3196C114.067 28.9598 114.939 29.8311 116.118 29.8311C117.451 29.8311 118.527 28.8573 118.527 27.2683V20.6562L121.962 20.7075Z" fill="black"/>
                        <path d="M133.753 30.3949C133.087 31.83 131.754 32.5989 130.216 32.6501C126.679 32.7014 124.833 29.7798 124.833 26.4994C124.833 21.8863 129.037 19.0672 133.087 21.1175V14.6592H136.47V28.4984C136.47 29.626 136.317 30.2924 137.547 30.1898V32.3939C135.855 32.8039 133.753 32.7527 133.702 30.7024L133.753 30.3949ZM133.189 23.9878C130.78 22.6039 128.217 23.5778 128.217 26.5506C128.217 28.2421 128.986 29.6773 130.78 29.6773C132.267 29.6773 133.189 28.4471 133.189 27.0119V23.9878Z" fill="black"/>
                        <path d="M148.313 30.3949C147.647 31.83 146.314 32.5989 144.776 32.6501C141.239 32.7014 139.393 29.7798 139.393 26.4994C139.393 21.8863 143.597 19.0672 147.647 21.1175V14.6592H151.03V28.4984C151.03 29.626 150.877 30.2924 152.107 30.1898V32.3939C150.415 32.8039 148.313 32.7527 148.262 30.7024L148.313 30.3949ZM147.749 23.9878C145.34 22.6039 142.777 23.5778 142.777 26.5506C142.777 28.2421 143.546 29.6773 145.34 29.6773C146.827 29.6773 147.749 28.4471 147.749 27.0119V23.9878Z" fill="black"/>
                        <path d="M161.079 33.5216C159.592 37.3145 158.054 39.3135 153.85 37.7758L154.209 35.418C156.106 36.2894 157.131 35.5206 157.798 33.6241L158.259 32.3939L153.132 21.0663V20.6562H156.67L158.259 24.603L159.797 28.9085H159.848L161.181 24.603L162.565 20.605H166V21.015L161.079 33.5216Z" fill="black"/>
                        <path d="M52.7529 46.7457C52.7529 45.003 53.7783 43.5166 55.5726 43.5166C56.3928 43.5166 57.1106 43.8241 57.5207 44.388L56.5979 45.1055C56.3928 44.7468 55.9827 44.593 55.5726 44.593C54.6498 44.593 53.9833 45.5156 53.9833 46.6432C53.9833 47.5658 54.496 47.9246 55.0086 47.9246C55.3675 47.9246 55.8289 47.7709 56.1878 47.3608L57.1106 48.0272C56.5466 48.6422 55.8802 49.001 54.9061 49.001C53.6245 49.001 52.7529 48.2322 52.7529 46.7457Z" fill="#095052"/>
                        <path d="M59.9302 47.6684C59.9302 46.8483 60.4941 46.387 61.3656 45.9256L61.9296 45.6181C62.596 45.2593 62.8523 45.1568 62.8523 44.8493C62.8523 44.6442 62.6473 44.5417 62.2884 44.5417C61.9808 44.5417 61.5707 44.6442 61.1606 45.003L60.4941 44.1829C60.9555 43.7729 61.7758 43.5166 62.391 43.5166C63.0574 43.5166 64.0827 43.7729 64.0827 44.8493C64.0827 45.8744 63.2625 46.1819 62.596 46.5407L61.9808 46.8483C61.3144 47.2071 61.1606 47.4121 61.1606 47.5658C61.1606 47.8734 61.5194 47.9246 61.7245 47.9246C62.2372 47.9246 62.6473 47.7709 63.0061 47.3608L63.9289 47.9759C63.3137 48.591 62.6473 48.9498 61.6732 48.9498C60.4428 49.001 59.9302 48.3859 59.9302 47.6684Z" fill="#095052"/>
                        <path d="M65.4155 43.5678H66.5946L66.4921 44.5417C66.9535 43.8241 67.5686 43.4653 68.3376 43.4653C69.5168 43.4653 70.0294 44.4905 70.0294 45.6181C70.0294 47.3096 69.0041 48.9498 67.4148 48.9498C66.8509 48.9498 66.3895 48.796 65.9794 48.4884L65.6718 51H64.4927L65.4155 43.5678ZM68.9016 45.7719C68.9016 45.1568 68.6452 44.593 68.0813 44.593C67.2611 44.593 66.3383 45.6181 66.1845 47.1558L66.1332 47.4121C66.3383 47.7709 66.6971 47.9246 67.1585 47.9246C68.2864 47.9246 68.9016 46.8482 68.9016 45.7719Z" fill="#095052"/>
                        <path d="M71.0548 46.8483L71.5162 43.5679H72.6953L72.2852 46.7458C72.1827 47.6171 72.3365 47.9247 72.8491 47.9247C73.413 47.9247 74.3871 47.0533 74.5409 45.8744L74.7972 43.6191H75.9764L75.3099 48.9498H74.1308L74.2333 47.9759C73.8232 48.591 73.2592 49.001 72.4902 49.001C71.3111 49.001 70.7985 48.386 71.0548 46.8483Z" fill="#095052"/>
                        <path d="M83.6153 48.0272L83.2564 48.9498C83.1538 48.9498 83.1026 48.9498 83.0001 48.9498C82.1798 48.9498 81.8722 48.386 81.5133 47.3096L81.4108 46.9508C81.1545 47.1045 80.8469 47.2583 80.5393 47.3096L80.3342 48.8473H79.1551L79.4627 46.2332C78.2836 46.8995 77.8734 47.7709 77.5146 48.8473H76.2842C76.5405 47.8734 77.1557 46.8995 77.9247 46.1819L77.6684 45.4131C77.412 44.6442 77.1557 44.4905 76.6943 44.388L77.0019 43.5166C77.1044 43.5166 77.207 43.5166 77.2582 43.5166C78.0785 43.5166 78.4886 44.0804 78.745 45.1568L78.8475 45.5669C79.1038 45.4131 79.3601 45.3106 79.5652 45.2081L79.7703 43.6191H80.9494L80.6418 46.2844C81.8722 45.6181 82.3849 44.6955 82.6925 43.6191H83.9228C83.6665 44.6442 83.0513 45.6181 82.2823 46.3357L82.5387 47.0533C82.8975 47.7709 83.1539 47.9759 83.6153 48.0272Z" fill="#095052"/>
                        <path d="M84.2305 46.8483C84.2305 45.1568 85.2558 43.5166 86.845 43.5166C87.409 43.5166 87.8704 43.6704 88.2292 44.0292H88.2805L88.3318 43.6191H89.5109L88.8444 48.9498H87.6653L87.7678 47.9759H87.7166C87.2039 48.6935 86.5887 49.0523 86.0248 49.0523C84.7944 49.001 84.2305 48.0272 84.2305 46.8483ZM88.1267 45.2593V45.0543C87.8191 44.7468 87.3064 44.5417 86.8963 44.5417C85.9735 44.5417 85.4096 45.7206 85.4096 46.797C85.4096 47.4633 85.7172 47.8734 86.2811 47.8734C87.0501 47.9246 87.9216 46.8995 88.1267 45.2593Z" fill="#095052"/>
                        <path d="M91.9717 48.4372L92.4331 47.4121C92.8432 47.7709 93.4584 47.9246 94.0223 47.9246C94.5863 47.9246 95.0477 47.6171 95.0477 47.1558C95.0477 46.797 94.6888 46.6432 94.1249 46.6432H93.2533L93.4071 45.7719H94.0736C94.8426 45.7719 95.1502 45.3618 95.1502 45.0543C95.1502 44.7468 94.8939 44.593 94.4325 44.593C93.9711 44.593 93.4584 44.7467 93.0483 44.9518L92.6381 43.9779C92.997 43.8241 93.7147 43.5166 94.535 43.5166C95.5603 43.5166 96.3806 43.9779 96.3806 44.8493C96.3806 45.4643 95.8167 45.9256 95.3553 46.0794C95.9705 46.1819 96.2781 46.6432 96.2781 47.1558C96.2781 48.3347 95.304 48.9498 93.9711 48.9498C92.997 49.001 92.4331 48.6935 91.9717 48.4372Z" fill="#095052"/>
                        <path d="M97.1494 46.8483C97.1494 45.1568 98.1747 43.5166 99.764 43.5166C100.328 43.5166 100.789 43.6704 101.148 44.0292H101.199L101.251 43.6191H102.43L101.763 48.9498H100.584L100.687 47.9759H100.636C100.123 48.6935 99.5077 49.0523 98.9437 49.0523C97.7133 49.001 97.1494 48.0272 97.1494 46.8483ZM101.046 45.2593V45.0543C100.738 44.7468 100.225 44.5417 99.8153 44.5417C98.8925 44.5417 98.3285 45.7206 98.3285 46.797C98.3285 47.4633 98.6361 47.8734 99.2001 47.8734C99.9178 47.9246 100.841 46.8995 101.046 45.2593Z" fill="#095052"/>
                        <path d="M105.967 43.5678H107.146L107.044 44.4392H107.095C107.608 43.7729 108.274 43.4653 108.838 43.4653C109.505 43.4653 109.915 43.7729 110.069 44.4392H110.12C110.632 43.7729 111.248 43.4653 111.965 43.4653C113.042 43.4653 113.452 44.1829 113.247 45.6694L112.786 48.8985H111.607L112.017 45.7719C112.119 45.003 112.017 44.5417 111.607 44.5417C111.094 44.5417 110.069 45.4643 109.915 46.797L109.658 48.8472H108.479L108.889 45.7206C108.992 44.9518 108.889 44.4905 108.479 44.4905C107.915 44.4905 106.941 45.5156 106.736 46.797L106.48 48.796H105.301L105.967 43.5678Z" fill="#095052"/>
                        <path d="M118.835 43.5679L118.169 48.8985H116.99L117.195 47.002H116.631H116.323L116.169 47.3096C115.657 48.386 115.093 48.9498 114.221 48.9498C114.119 48.9498 114.016 48.9498 113.914 48.9498L113.811 48.0272C114.324 47.9246 114.683 47.7709 115.041 47.0533L115.246 46.6945C114.631 46.4382 114.426 45.8744 114.426 45.4643C114.426 44.1317 115.4 43.5166 116.733 43.5166L118.835 43.5679ZM117.348 46.0282L117.502 44.6442H116.733C116.118 44.6442 115.708 44.9518 115.708 45.5156C115.708 45.9256 116.067 46.0794 116.579 46.0794L117.348 46.0282Z" fill="#095052"/>
                        <path d="M121.091 46.1819L119.758 43.5679H121.142L121.86 45.3106H121.911L123.039 43.5679H124.526L122.526 46.2332L123.859 48.8985H122.475L121.706 47.1558L120.475 48.8985H119.091L121.091 46.1819Z" fill="#095052"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1_2333">
                        <rect width="166" height="51" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>

                        </div>
                    </div>
                </div>
                <div class="col col-md-8 col-xxl-8">
                    <div class="menu-wepeer text-center d-none d-sm-none d-md-block">
                    <img src="<?php echo AIRDESIGNS_DIR_IMG.'/plan/progress.svg' ?>" alt="<?php bloginfo('name'); ?>">
                        <!-- preloder  -->
                        <!-- <div class="progressbar">
                            <div class="progressbar__step is-done" is-done data-step='✓'><a href="#">Профил</a></div>
                            <div class="progressbar__step "  data-step='✓'><a href="#">Любимец</a></div>
                            <div class="progressbar__step" data-step='3'><a href="#">Месечна кутия</a></div>
                            <div class="progressbar__step" data-step='4'><a href="#">Доставка и начин на плащане</a></div>
                        </div> -->
                    </div>
                </div>
                <div class="col col-md-1 col-xxl-1">
                    <div class="btns-head-2">
                        <a href="#">Откажи</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- header-2 -->
<!-- nutrition Plan -->
<!-- section-1 -->
    <div class="nutrition-wepper">
        <div class="container">
            <div class="header text-center">
               <h4>Хранителен план за Старк</h4>
               <p>Според зададените от теб хранителни и двигателни навици количеството храна необходомо за отглеждането на Старк за един месец е:</p>
            </div>
        </div>
    </div>
<!-- section-1 -->
<!-- section-2 -->
    <div class="prodact-nutrition-wepeer">
        <div class="container">
            <div class="row">
                <div class="product">
                    <div class="product-item">
                        <h4>Суха храна</h4>
                        <div class="product-info">
                            <div class="item-img text-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/12-kg.png' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                            <div class="item-title text-center">
                                <h5>Advance Veterinary Diets Renal Failure </h5>
                            </div>
                            <div class="item-info d-flex justify-content-between">
                                <p>Цена: 17.50 лв</p>
                                <p>Пакет: 2 кг</p>
                            </div>
                            <div class="item-info-2">
                                <p>Количество:<span> 3 пакета</span></p>
                                <p>Абонамент<span>: - 15%</span></p>
                                <p>Цена:<span> 52.50 лв.</span></p>
                            </div>
                            <div class="btns text-center">
                                <a href="#">Промени</a>
                            </div>
                            <div class="deleted">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/delete.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <h4>Мокра храна</h4>
                        <div class="product-info">
                            <div class="item-img text-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/dog-icon.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                            <div class="item-title text-center">
                                <h5>Няма избран продукт </h5>
                            </div>
                            <!-- <div class="item-info d-flex justify-content-between">
                                <p>Цена: 17.50 лв</p>
                                <p>Пакет: 2 кг</p>
                            </div>
                            <div class="item-info-2">
                                <p>Количество:<span> 3 пакета</span></p>
                                <p>Абонамент<span>: - 15%</span></p>
                                <p>Цена:<span> 52.50 лв.</span></p>
                            </div> -->
                            <div class="btns text-center ">
                                <a href="#">Промени</a>
                            </div>
                            <!-- <div class="deleted">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/delete.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div> -->
                        </div>
                    </div>
                    <div class="product-item">
                        <h4>Лакомство</h4>
                        <div class="product-info">
                            <div class="item-img text-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/12-kg.png' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                            <div class="item-title text-center">
                                <h5>Advance Veterinary Diets Renal Failure </h5>
                            </div>
                            <div class="item-info d-flex justify-content-between">
                                <p>Цена: 17.50 лв</p>
                                <p>Пакет: 2 кг</p>
                            </div>
                            <div class="item-info-2">
                                <p>Количество:<span> 3 пакета</span></p>
                                <p>Абонамент<span>: - 15%</span></p>
                                <p>Цена:<span> 52.50 лв.</span></p>
                            </div>
                            <div class="btns text-center">
                                <a href="#">Промени</a>
                            </div>
                            <div class="deleted">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/delete.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <h4>Медикамент</h4>
                        <div class="product-info">
                            <div class="item-img text-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/12-kg.png' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                            <div class="item-title text-center">
                                <h5>Advance Veterinary Diets Renal Failure </h5>
                            </div>
                            <div class="item-info d-flex justify-content-between">
                                <p>Цена: 17.50 лв</p>
                                <p>Пакет: 2 кг</p>
                            </div>
                            <div class="item-info-2">
                                <p>Количество:<span> 3 пакета</span></p>
                                <p>Абонамент<span>: - 15%</span></p>
                                <p>Цена:<span> 52.50 лв.</span></p>
                            </div>
                            <div class="btns text-center">
                                <a href="#">Промени</a>
                            </div>
                            <div class="deleted">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/delete.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <h4>Играчка</h4>
                        <div class="product-info">
                            <div class="item-img text-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/12-kg.png' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                            <div class="item-title text-center">
                                <h5>Advance Veterinary Diets Renal Failure </h5>
                            </div>
                            <div class="item-info d-flex justify-content-between">
                                <p>Цена: 17.50 лв</p>
                                <p>Пакет: 2 кг</p>
                            </div>
                            <div class="item-info-2">
                                <p>Количество:<span> 3 пакета</span></p>
                                <p>Абонамент<span>: - 15%</span></p>
                                <p>Цена:<span> 52.50 лв.</span></p>
                            </div>
                            <div class="btns text-center">
                                <a href="#">Промени</a>
                            </div>
                            <div class="deleted">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/delete.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <h4>Хигиена</h4>
                        <div class="product-info">
                            <div class="item-img text-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/12-kg.png' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                            <div class="item-title text-center">
                                <h5>Advance Veterinary Diets Renal Failure </h5>
                            </div>
                            <div class="item-info d-flex justify-content-between">
                                <p>Цена: 17.50 лв</p>
                                <p>Пакет: 2 кг</p>
                            </div>
                            <div class="item-info-2">
                                <p>Количество:<span> 3 пакета</span></p>
                                <p>Абонамент<span>: - 15%</span></p>
                                <p>Цена:<span> 52.50 лв.</span></p>
                            </div>
                            <div class="btns text-center">
                                <a href="#">Промени</a>
                            </div>
                            <div class="deleted">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/delete.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-product-wepeer">
                <div class="product-single">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-5 col-xxl-5">
                            <div class="sin-product-img d-flex align-items-center">
                                <img src="<?php echo AIRDESIGNS_DIR_IMG.'/Plan/monthly-box.svg' ?>"  alt="<?php bloginfo('name'); ?>"> 
                                <h5>Месечна стартова кутия на Старк.</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xxl-4">
                            <div class="price-cetagory">
                                <div class="price d-flex"><h6>Цена:</h6> <p><span class="price-sty">162.62 лв.</span></p></div>
                                <div class="price d-flex"><h6>Спестено:</h6> <p> <span class="price">32.65 лв.</span></p></div>   
                                <div class="price d-flex"><h6><span>Общо:</span></h6> <p><span>132.65 лв. /мес</span></p></div>   
                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-xxl-3">
                            <div class="btn-single text-center">
                                <a href="#">Поръчай</a>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
<!-- section-2 -->
<!-- nutrition Plan -->