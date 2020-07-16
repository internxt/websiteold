<style lang="scss" scoped>

    .xcore-earnings-calculator {

        margin: 0 auto;

        @media (min-width: 1024px) {
            width: 440px;
        }

    }

    .form-item {

        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-bottom: 15px;
        margin-right: 12px;

        &--inxt-owned {
            margin-right: 27px;
        }

        &--amount-earned {

            .value-container{
                width: 160.5px;
            }

            .value {
                margin-right: 20px;
            }

        }

        @media (min-width: 1024px) {
            margin-bottom: 0;
        }

    }

    .label {

        color: #19191a;
        font-size: 15.6px;
        font-stretch: normal;
        font-style: normal;
        font-weight: 500;
        letter-spacing: -0.13px;
        line-height: 1.49;
        margin-bottom: 7px;

        @media (min-width: 1024px) {
            font-size: 13px;
            letter-spacing: -0.11px;
            line-height: 1.49;
        }

    }

    .value-container {
        align-items: center;
        background-color: #f2f2f2;
        border-radius: 23.4px;
        display: flex;
        height: 36px;
        justify-content: flex-end;
        padding: 0 15px;
        width: 128px;
    }

    .value {

        background: none;
        font-size: 13px;
        height: 20px;
        line-height: 1.49;
        text-align: right;
        width: 90px;

        &:focus {
            outline: none;
            box-shadow: none;
        }

    }

    .value__suffix {
        color: #7f7f7f;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: -0.11px;
        line-height: 1.49;
    }

</style>
<template>
    <div class="xcore-earnings-calculator lg:flex">
        <div class="form-item">
            <p class="label">Storage allocated</p>
            <div class="value-container">
                <input
                    class="value"
                    type="number"
                    value="132"
                    :min="1"
                    :max="maxInputGigabytes"
                    v-model="gigabytesAllocated"
                >
                <span class="value__suffix">GB</span>
            </div>
        </div>
        <div class="form-item form-item--inxt-owned">
            <p class="label">INXT owned</p>
            <div class="value-container">
                <input
                    class="value"
                    type="number"
                    value="132"
                    :min="0"
                    :max="maxInputInxt"
                    v-model="inxtOwned"
                >
                <span class="value__suffix">INXT</span>
            </div>
        </div>
        <div class="form-item form-item--amount-earned">
            <p class="label">Amount earned/month</p>
            <div class="value-container value-container--last">
                <p class="value">{{ totalText }}</p>
                <span class="value__suffix">EUR</span>
            </div>
        </div>
    </div>
</template>

<script>

    import accounting from 'accounting-js';

    export default {
        data() {
            return {
                gigabytesAllocated: null,
                inxtOwned: null,
                centsPerGigabyte: 1,
                minInxtForBonus: 100,
                bonusPercentage: 0.1,
                hasFocus: false,
                maxInputInxt: 999999,
                maxInputGigabytes: 999999,
            }
        },

        watch: {

            inxtOwned: function (newValue) {
                this.inxtOwned = Math.min(newValue, this.maxInputInxt);
            },

            gigabytesAllocated: function (newValue) {
                this.gigabytesAllocated = Math.min(newValue, this.maxInputGigabytes);
            },

        },

        computed: {

            focusClasses() {
                return {
                    'x-core-earnings-calculator': true,
                    'x-core-earnings-calculator--hasFocus': this.hasFocus,
                }
            },

            gigaBytePlaceholder() {
                if (!this.hasFocus) {
                    return 'Amount of GB allocated';
                }
            },

            inxtPlaceholder() {
                if (!this.hasFocus) {
                    return 'Amount of INXT owned';
                }
            },

            totalText() {
                if (this.gigabytesAllocated > 0) {
                    return this.amountEarned;
                }
            },

            amountEarned() {
                /**
                    €0,02 are paid per GB allocated.
                    0.01% is added per 1 INXT held (over 99 INXT).

                    Examples:
                    100GB,   0 INXT = 100GB*€0,02/GB = €2/month
                    100GB,  99 INXT = 100GB*€0,02/GB = €2/month
                    100GB, 100 INXT = 100GB*€0,02/GB = €2/month; 1% of €2 = €0,02 => €2,02
                    100GB, 150 INXT = 100GB*€0,02/GB = 2€/month; 1.5% of €2 = €0,03 => €2,03
                    100GB, 200 INXT = 100GB*€0,02/GB = 2€/month; 2% of €2 = €0,04 => €2,04
                */

                var amountInCents = this.gigabytesAllocated * this.centsPerGigabyte;

                if (this.inxtOwned >= this.minInxtForBonus) {
                    amountInCents += this.addBonus(amountInCents);
                }

                var amountInEuros = amountInCents / 100;

                return this.formatAmount(amountInEuros);
            },
        },

        methods:{

            takeFocus(){
                this.hasFocus = true;
            },

            loseFocus(){
                // Only lose focus if nothing has been entered in either field
                if (!this.gigabytesAllocated && !this.inxtOwned) {
                    this.hasFocus = false;
                }
            },

            formatAmount(amount) {
                return accounting.formatMoney(amount, {
                    symbol: "€",
                    decimal: ".",
                    thousand: ",",
                    precision: 2,
                });
            },

            addBonus(originalAmount) {
                var bonusMultiplier = (this.inxtOwned * this.bonusPercentage) / 100;
                return originalAmount * bonusMultiplier;
            }

        },
    }
</script>
