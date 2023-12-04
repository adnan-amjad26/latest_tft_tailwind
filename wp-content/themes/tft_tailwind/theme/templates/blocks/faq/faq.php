<?php
/**
 * Block Name: FAQ
 */
?>
<?php $icon = get_field('icon'); ?>
<?php $title = get_field('title'); ?>
<?php $faq = get_field('faq'); ?>
<?php $link = get_field('link'); ?>
<?php $image = get_field('image'); ?>
<?php $image_2 = get_field('image_2'); ?>

<?php
// Your ACF block data
// $acf_data = '<!-- wp:acf/faq {"name":"acf/faq","data":{"faq_0_question":"What is The Funded Trader?","_faq_0_question":"field_642714f388841","faq_0_answer":"The Funded Trader is an online demo trading evaluation firm. We give clients the ability to complete our assessment and prove their trading skills in an environment that poses no risks to them for just the price of the upfront fee paid for the evaluation. After passing the evaluation, eligible traders are allowed to receive a profit split on the profits generated in their Funded Account subject to compliance with our Terms of Use and the Customer Agreement. At The Funded Trader, we believe every retail trader deserves the opportunity to raise capital based on their performance and commitment to building their own business. The Forex League and VVS Academy founders set out to create The Funded Trader after trading and reviewing other platforms and finding that they could provide a solution that is exactly what the community needed - a community for traders, by traders. You can find us on \u003ca href=\u0022https://www.youtube.com/channel/UCvEH-PLiEVBLCPv3TkblHnA\u0022\u003eYoutube\u003c/a\u003e and \u003ca href=\u0022https://www.instagram.com/thefundedtrader/\u0022\u003eInstagram\u003c/a\u003e sharing our daily trading education and exemplifying our passion for this industry. Please join our community on \u003ca href=\u0022https://discord.gg/R5CX3rsPFD\u0022\u003eDiscord\u003c/a\u003e to stay up to date with the latest improvements and to help us celebrate the community that we have built together.","_faq_0_answer":"field_642714f988842","faq_1_question":"How do I get started with The Funded Trader?","_faq_1_question":"field_642714f388841","faq_1_answer":"Starting out with The Funded Trader is as simple as possible. Begin by navigating to the \u003ca href=\u0022https://thefundedtraderprogram.com/#choose-your-path\u0022\u003e\u0022Challenge\u0022\u003c/a\u003e section of our website and then select the program and account size you would like to participate in. You\'ll want to visit our \u003ca href=\u0022https://help.thefundedtraderprogram.com/\u0022\u003eKnowledge Center\u003c/a\u003e to learn the specific rules and objectives of each of our offerings before purchasing. Once you are ready, click on the “Buy” button at the bottom of your desired program\'s banner to head to checkout to enter your billing and payment details. If you purchase using crypto, please understand that we only accept ERC20 network addresses and cannot provide technical support to members who use a different network for purchases through crypto. Within a few minutes after your purchase, you will receive your account credentials in a welcome email and will be able to access the \u003ca href=\u0022https://dashboard.thefundedtraderprogram.com/\u0022\u003eTrade Hub\u003c/a\u003e where you can find your profile information, dashboard and more.","_faq_1_answer":"field_642714f988842","faq_2_question":"What documents do i need in order to trade with The Funded Trader?","_faq_2_question":"field_642714f388841","faq_2_answer":"Before issuing any Funded Accounts or any type of payout to the client related to successfully completing one of our programs, we require that you verify your ID and pass our KYC/AML screening. For 99% of people, this will never be an issue, and the check will take no more than 5 minutes. To learn more about the specific steps required to complete the verification process, \u003ca href=\u0022https://help.thefundedtraderprogram.com/en/articles/6082888-what-documents-do-i-need-in-order-to-trade-with-the-funded-trader\u0022\u003evisit this Knowledge Center article\u003c/a\u003e.","_faq_2_answer":"field_642714f988842","faq_3_question":"Are there any countries we cannot trade from?","_faq_3_question":"field_642714f388841","faq_3_answer":"Due to OFAC sanctions, we are unable to offer services with traders residing in the following countries: Cuba, Iran, Lebanon, Syria, North Korea, Libya, Sudan, Somalia.","_faq_3_answer":"field_642714f988842","faq_4_question":"How fast will I receive a Funded Trader cahallenge after I sign up?","_faq_4_question":"field_642714f388841","faq_4_answer":"Upon receiving your confirmation of successful payment, you will receive your Trading Platform and Dashboard credentials within 5 minutes. For Coinbase Commerce payments, your order will not be confirmed until the payment is verified by the blockchain, which can take some time and depends on network congestion. Once the payment is confirmed on the blockchain, you will receive your Trading Platform and Dashboard credentials within 5 minutes. To learn more, \u003ca href=\u0022https://help.thefundedtraderprogram.com/en/articles/6082903-how-fast-will-i-receive-a-funded-trader-challenge-after-i-sign-up\u0022\u003evisit our Knowledge Center article on this subject\u003c/a\u003e.","_faq_4_answer":"field_642714f988842","faq_5_question":"Is there an age requirement to get funded?","_faq_5_question":"field_642714f388841","faq_5_answer":"Yes, the minimum age to participate in all of our programs is 18 years of age or older.","_faq_5_answer":"field_642714f988842","faq_6_question":"How many accounts can i trade at any given time?","_faq_6_question":"field_642714f388841","faq_6_answer":"While we do not have limits on the number of accounts a trader can have, we do limit the total account value of all accounts held by a person to $600k. For clarification, during the challenge (Phase-1 and Phase-2), you are not permitted to trade more than $600k. If you trade more than $600k at any given time, then you will be refunded for all of your accounts and you will have to start over. For example, you can have two $200k accounts and two $100k accounts, which add up to $600k in total account value. However, you cannot then add any more accounts beyond these as the total account value would exceed our $600k total account value limit.","_faq_6_answer":"field_642714f988842","faq_7_question":"What is the Standard Challenge?","_faq_7_question":"field_642714f388841","faq_7_answer":"The Standard Challenge consists of a two-phased evaluation process where a trader has 35 calendar days to pass the first phase and another 60 days to pass the second phase. In each phase, there are certain rules and objectives the trader must achieve and abide by in order to pass the challenge and earn a Funded Account. To learn everything you need to know about the Standard Challenge, including a video walkthrough, \u003ca href=\u0022https://help.thefundedtraderprogram.com/en/collections/3394696-standard-challenge-rules\u0022\u003evisit our Knowledge Center here \u003c/a\u003e.","_faq_7_answer":"field_642714f988842","faq_8_question":"What is the Royal Challenge?","_faq_8_question":"field_642714f388841","faq_8_answer":"The Royal Challenge is our newest exciting program. Similar to the two step evaluation process like our Standard and Rapid Challenge, the main advantage with this program is that it is the only challenge that allows you to use EAs and trade news with a higher leverage. With the Royal Challenge, there are no lot size limitations, and you only need to complete a minimum of 5 trading days to complete the objectives for both phases. To learn everything you need to know about the Royal Challenge, \u003ca href=\u0022https://help.thefundedtraderprogram.com/en/collections/3502934-royal-challenge-rules\u0022\u003evisit our Knowledge Center here.\u003c/a\u003e","_faq_8_answer":"field_642714f988842","faq_9_question":"What is the Rapid Challenge?","_faq_9_question":"field_642714f388841","faq_9_answer":"The Rapid Challenge is our two-step evaluation program in which you can get your first payout in as little as 20 days! Traders are able to sign up for this challenge using a $50k, $100k, or $200k account. Simply choose the amount of capital you would like to manage and pass the evaluation by meeting the Trading Objectives during Phase-1 and Phase-2 of the evaluation. With the Rapid Challenge, there are no minimum trading days on your evaluation. Your first profit split is eligible after 14-days once you earn your funded account. To learn everything you need to know about the Rapid Challenge, including pricing and payouts, \u003ca href=\u0022https://help.thefundedtraderprogram.com/en/collections/3394701-rapid-challenge-rules\u0022\u003evisit our Knowledge Center here.\u003c/a\u003e","_faq_9_answer":"field_642714f988842","faq_10_question":"Wat are The Funded Trader Competitions?","_faq_10_question":"field_642714f388841","faq_10_answer":"The Funded Trader competitions are a free opportunity for everyone to participate in a monthly challenge and be one of 30 winners who earn prizes. Everyone is allowed to participate in the competitions each month! To learn everything you need to know about Competitions, \u003ca href=\u0022https://help.thefundedtraderprogram.com/en/collections/3394708-competitions\u0022\u003evisit our Knowledge Center here\u003c/a\u003e , or you can \u003ca href=\u0022https://dashboard.thefundedtraderprogram.com/competitions\u0022\u003esign up for the next Competition via our Trade Hub here.\u003c/a\u003e","_faq_10_answer":"field_642714f988842","faq_11_question":"Am I trading real money?","_faq_11_question":"field_642714f388841","faq_11_answer":"After a client becomes a Funded Trader, he/she will be provided with a demo account with virtual funds. For the avoidance of any confusion, please keep in mind that a Funded Account is a fully simulated account with real market quotes from liquidity providers. The trading data is sent off to a partnered proprietary trading firm where trades are copied at their own discretion using aggregated orders using proprietary risk management techniques. To learn everything you need to know about a Funded Account with The Funded Trader, \u003ca href=\u0022https://help.thefundedtraderprogram.com/en/collections/3394711-tft-funded-account\u0022\u003evisit our Knowledge Center\u003c/a\u003e.","_faq_11_answer":"field_642714f988842","faq_12_question":"What trading instruments are available?","_faq_12_question":"field_642714f388841","faq_12_answer":"We allow trading of the instruments available on your trading platform. This typically includes forex, commodities, indices, and crypto. We also document these instruments on \u003ca href=\u0022https://docs.google.com/spreadsheets/d/1-DGm1g45Q9WTGOH1tcpTj1FW9ozB-blm/edit?usp=sharing\u0026amp;ouid=113128333079723585349\u0026amp;rtpof=true\u0026amp;sd=true\u0022\u003eThe Funded Trader Available Instruments \u003c/a\u003esheet.","_faq_12_answer":"field_642714f988842","faq":13,"_faq":"field_642714d48883f","icon":522,"_icon":"field_6427154f88846","title":"Popular FAQs","_title":"field_6427151188843","link":{"title":"View All FAQs","url":"https://help.thefundedtraderprogram.com/en/","target":"_blank"},"_link":"field_6427152588844","image":524,"_image":"field_642714a28883c","image_2":523,"_image_2":"field_642714bb8883d"},"mode":"edit"} /-->';

// // Use regular expressions to extract ACF field values
// preg_match('/"icon":(\d+),/', $acf_data, $icon);
// preg_match('/"title":"(.*?)",/', $acf_data, $title);
// preg_match('/"faq_0_question":"(.*?)",/', $acf_data, $faq_0_question);
// preg_match('/"faq_0_answer":"(.*?)",/', $acf_data, $faq_0_answer);
// // Add more regular expressions to extract other questions and answers as needed

// // Define default values in case the ACF fields are not present
// $icon = isset($icon[1]) ? $icon[1] : '';
// $title = isset($title[1]) ? $title[1] : '';
// $faq_0_question = isset($faq_0_question[1]) ? $faq_0_question[1] : '';
// $faq_0_answer = isset($faq_0_answer[1]) ? $faq_0_answer[1] : '';
// Define default values for other fields as well
?>
<section class="accordion p-[50px_16px] md:p-[50px_40px] bg-green-light" data-scroll-section>
    <div class="max-w-[1308px] w-full mx-auto relative z-10">
        <?php if($icon || $title): ?>
            <div class="flex">
                <div class="w-full text-center">
                    <?php if($icon): ?>
                        <div class="icon mb-12 w-28 mx-auto">
                            <img decoding="async" loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['title']; ?>">
                        </div>
                    <?php endif; ?>
                    <?php if($title): ?>
                        <div class="title mx-[-15px] sm:mx-0">
                            <h3 class="text-[36px] xl:text-[40px] 2xl:text-[40px]"><?php echo $title; ?></h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="flex mt-12 lg:mt-16">
            <div class="w-full flex flex-col gap-[20px] md:gap-[50px] xl:gap-[100px] justify-between">
                <?php if($faq): ?>
                    <?php $half = ceil(count($faq) / 2); ?>
                    <?php $faq_left = array_slice($faq, 0, $half); ?>
                    <?php $faq_right = array_slice($faq, $half); ?>

                    <div class="flex flex lg:hidden items-center justify-center gap-[10px] sm:gap-[20px]">
                        <button class="toggle-button w-[185px] h-[58px] relative wadik text-[12px] sm:text-[14px] text-[#FC991A] flex justify-center items-center text-center" id="button1" data-target="div1">
                            <span class="max-w-[140px] sm:max-w-[169px] mx-auto relative left-[-5px] z-[2]">Getting Started</span>
                            <img class="absolute left-0 top-0 right-0 bottom-0 h-full" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-regular.png" alt="scroll-content">
                        </button>
                        <button class="toggle-button w-[185px] h-[58px] relative wadik text-[12px] sm:text-[14px] text-white" id="button2" data-target="div2"><span class="max-w-[140px] sm:max-w-[169px] mx-auto relative left-[-5px] z-[2]">About our challenges</span>
                        <img class="absolute left-0 top-0 right-0 bottom-0 h-full" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-regular.png" alt="scroll-content">
                        </button>
                    </div>
                    <div>
                    </div>

                        <div class="flex flex-col lg:flex-row items-center gap-[70px]">
                            <div class="max-w-[480px] w-full hidden md:block">
                                <div class="w-full relative">
                                    <h4 class="max-w-[176px] wadik text-[24px] text-black absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center">getting started</h4>
                                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/title-bg-shape.svg" alt="scroll-content">
                                    </div>
                            </div>
                            <div class="w-auto sm:w-full mx-[-16px]">
                            <?php if($faq_left): ?>
                                <ul class="w-full items text-white bg-black text-[14px] p-[0_15px_15px_15px] flex flex-col bg-opacity-[0.7]">
                                <?php foreach($faq_left as $item): ?>
                                    <li class="border-b border-b-[3px] border-[#90633E]">
                                        <div class="wadik title-wrap flex items-center justify-between p-[25px_10px] mb-[6px]">
                                            <p class="title"><?php echo $item['question']; ?></p>
                                            <div class="toggle min-w-[18px] w-[18px] h-[18px]">
                                                <svg class="fill-white w-full h-full" decoding="async"><use xlink:href="#plus"></use></svg>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="inner pb-[20px] px-[10px] text-[1.5rem] font-[500] leading-[1.47]">
                                                <?php echo $item['answer']; ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            </div>
                        </div>




                        <div class="flex flex-col lg:flex-row items-center gap-[70px]">
                            <div class="max-w-[480px] w-full hidden md:block">
                                    <div class="w-full relative">
                                    <h4 class="max-w-[216px] wadik text-[24px] text-black absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 text-center">ABOUT OUR CHALLENGES</h4>
                                        <img decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/title-bg-shape.svg" alt="scroll-content">
                                    </div>
                            </div>
                            <div class="w-auto sm:w-full mx-[-16px]">
                            <?php if($faq_right): ?>
                                    <ul  class="w-full items text-white bg-black text-[14px] p-[0_15px_15px_15px] flex flex-col bg-opacity-[0.7]">
                                        <?php foreach($faq_right as $item): ?>
                                            <li class="border-b border-b-[3px] border-[#90633E]">
                                                <div class="wadik title-wrap flex items-center justify-between p-[25px_10px] mb-[6px]">
                                                    <p class="title"><?php echo $item['question']; ?></p>
                                                    <div class="toggle min-w-[18px] w-[18px] h-[18px]">
                                                        <svg class="fill-white w-full h-full" decoding="async"><use xlink:href="#plus"></use></svg>
                                                    </div>
                                                </div>

                                                <div class="content">
                                                    <div class="inner pb-[20px] px-[10px] text-[1.5rem] font-[500] leading-[1.47]">
                                                        <?php echo $item['answer']; ?>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            <?php endif; ?>
                            </div>
                        </div>




                <?php if($link): ?>
                    <div class="button mt-12 lg:mt-24 mx-auto">
                        <a href="<?php echo $link['url']; ?>" class="btn btn-gold p-[.8rem_2rem_.7rem] rounded-[1rem] border-[.5rem] border-[#f7971e] border-t-[#f2af5d] border-b-[#c86e32] relative inline-flex items-center wadik text-[1.2rem]">
                            <span class="z-[1]"><?php echo $link['title']; ?></span>
                            <img class="left-0 -translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-left.svg" alt="btn-gold-left">
                            <img class="right-0 translate-x-[58%]" decoding="async" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/btn-gold-right.svg" alt="btn-gold-right">
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($image || $image_2): ?>
        <figure class="bg absolute bottom-0 left-0 w-full z-0">
            <?php if($image): ?>
                <img class="imgs-day" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
            <?php endif; ?>
            <?php if($image_2): ?>
                <img class="imgs-night" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['title']; ?>">
            <?php endif; ?>
        </figure>
    <?php endif; ?>
</section>
