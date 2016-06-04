<div class="header">
    <header class="globalHeader">
        <div class="globalHeader__wrapper">
            <div class="globalHeader__logo">NOTONZA</div>
        </div>
    </header>
</div>
<div class="wrapper">
    <section id="form" class="contents">
        <div class="contents__inner">
            <h1 class="contents__title">目標金額表示</h1>
            <p class="formBox__text">
                目標金額 <?= $target ?> 円
            </p>
            <p class="formBox__text">
                期限 <?= $year_to ?>年 <?= $month_to ?>月
            </p>
            <h1 class="contents__title">当月残高入力</h1>
            <div class="formBox">
                <form name="items" action="summary" method="post">
                    <div class="inputBox">
                        <table class="formTable">
                            <tr>
                                <th class="formTable__title">¥</th>
                                <td>
                                    <input type="hidden" name="target" value="<?= $target ?>">
                                    <input type="hidden" name="year_to" value="<?= $year_to ?>">
                                    <input type="hidden" name="month_to" value="<?= $month_to ?>">
                                    <input name="balance" id="balance" class="formTable__input" value="" placeholder="例：300,000">
                                </td>
                            </tr>
                        </table>
                        <div class="buttonWrapper">
                            <input type="submit" value="今の君" id="send" class="formButton">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
