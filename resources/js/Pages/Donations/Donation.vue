<template>
    <div class="page-wrap flex items-center justify-center min-h-screen">
        <!-- header  -->
        <header class="header-section has-header-main ">
            <!-- Header main -->
            <HeaderMain isTransparent="is-transparent"></HeaderMain>
            <section class=" ">


                <div class="container">

                    <div class="flex max p-6  rounded-lg shadow-lg text-gray-800">

                        <div>
                            <h1 class="text-2xl font-bold mb-4">Help Our Charity Do More</h1>
                            <p class="mb-4">freeCodeCamp is a highly efficient education charity.</p>
                            <p class="mb-4">When you donate to freeCodeCamp, you help people learn new skills and
                                provide for
                                their
                                families.</p>
                            <p class="mb-6">You also help us create new resources for you to use to expand your own
                                technology
                                skills.
                            </p>
                        </div>

                        <div>
                            <!--  {{ amount }} -->
                            <h2 class="text-lg font-semibold mb-2">Confirm your donation of ${{ amount }} / month:</h2>
                            <div class="flex space-x-4 mb-4">
                                <button @click="amount = 0.01"
                                    class="flex-1 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">$5</button>
                                <button @click="amount = 10"
                                    class="flex-1 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">$10</button>
                                <button @click="amount = 20"
                                    class="flex-1 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">$20</button>
                                <button @click="amount = 40"
                                    class="flex-1 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">$40</button>
                            </div>
                            <p class="mb-4">$5 donation will provide 250 hours of learning to people around the world
                                each
                                month.
                            </p>
                            <button
                                class="w-full py-2 bg-yellow-500 text-gray-800 font-bold rounded-md hover:bg-yellow-600">Donate</button>


                            <div>
                                <div id="paypal-button-container" class="mt-4"></div>
                            </div>
                        </div>

                    </div>

                </div><!-- .container -->
            </section><!-- trending-section -->

        </header>



        <!-- Footer  -->
    </div>
    <Footer classname="bg-dark on-dark"></Footer>

</template>

<script>
import HeaderMain from '@/Layouts/HeaderMain.vue';
import Footer from '@/Layouts/Footer.vue';
import SectionHeading from '@/Components/common/SectionHeading.vue';
import ButtonLink from '@/Components/Common/ButtonLink.vue';
import { ref, nextTick } from 'vue';

export default {
    components: { HeaderMain, Footer, SectionHeading, ButtonLink },
    setup() {
        const amount = ref(5);

        const renderPayPalButton = () => {
            paypal.Buttons({
                createOrder: function (data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: amount.value // Cambia el valor según sea necesario
                            }
                        }]
                    });
                },
                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (details) {
                        console.log(details);
                        // Aquí puedes redirigir o realizar otras acciones después de la transacción
                    });
                },
                onCancel: function (data) {
                    alert("Transaction cancelled by ");
                    console.log(data);
                }
            }).render('#paypal-button-container'); // Renderiza el botón en el contenedor
        };


        nextTick(() => {
            renderPayPalButton(); // Llama a la función después de que el DOM esté listo
        });

        return {
            amount,
        }
    }
}
</script>

<style lang="scss" scoped></style>
