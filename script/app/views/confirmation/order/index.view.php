<?php  include(__DIR__ .'/../layout/header.php') ?>
<main>
        <section class="order-details-section">
            <div class="container">
                <div class="alert"> Svaed succefully !!</div>
                <div class="wrapper">

                    <div class="order-details">

                        <header>
                            <h2>Order</h2>
                        </header>
                        <table>
                            <tr>
                                <td>Client Name </td>
                                <td><input type="text" name="" id="" value="Mohamed Lkhayat"> <i class="fa-solid fa-clipboard"></i> </td>
                            </tr>
                            <tr>
                                <td>Adress </td>
                                <td><input type="text" name="" id="" value="Casa"> <i class="fa-solid fa-clipboard"></i> </td>
                            </tr>
                            <tr>
                                <td>Products </td>
                                <td><input type="text" name="" id="" value="Protable Iphone 11"> <i class="fa-solid fa-clipboard"></i> </td>
                            </tr>
                            <tr>
                                <td>Phone </td>
                                <td><input type="text" name="" id="" value="06199568511"> <i class="fa-solid fa-clipboard"></i> </td>
                            </tr>
                            <tr>
                                <td>Quantity</td>
                                <td><input type="text" name="" id="" value="2"> <i class="fa-solid fa-clipboard"></i> </td>
                            </tr>

                        </table>
                    </div>
                    <div class="confirmation-details">
                        <header>
                            <h2>details</h2>
                        </header>
                        <table>
                            <tr>
                                <td>ref </td>
                                <td>order_5555</td>
                            </tr>
                            <tr>
                                <td>status</td>
                                <td>
                                    <select name="" id="">
                                        <option value="">Confirmed</option>
                                        <option value="">Annuler</option>
                                        <option value="">Reporter</option>
                                        <option value="">suiver</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>tranche</td>
                                <td>Tranche Name </td>
                            </tr>
                            <tr>
                                <td>Confirmation </td>
                                <td> Asmae Khalil </td>
                            </tr>
                            <tr>
                                <td>Store </td>
                                <td>Daily Confort</td>
                            </tr>


                        </table>
                    </div>
                    <div class="order-notes">
                        <header>
                            <h2>notes</h2>
                        </header>

                        <textarea name="" id="" cols="30" rows="10"> </textarea>

                    </div>
                    <div class="save-block">

                        <button>Save <i class="fa-solid fa-floppy-disk"></i></button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php  include(__DIR__ .'/../layout/footer.php') ?>