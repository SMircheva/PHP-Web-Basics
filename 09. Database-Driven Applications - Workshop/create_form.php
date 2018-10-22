<form method="post">
    <table>
        <input type="hidden" name="product_id" value="<?=$product['product_id']?>">

        <tr>
            <th>
                Name:
            </th>
            <td>
                <input type="text" name="product_name" value="<?=$product['product_name']?>">
            </td>
        </tr>
        <tr>
            <th>
                Price:
            </th>
            <td>
                <input type="text" name="price" <?=$product['price']?>>
            </td>
        </tr>
        <tr>
            <th>
                Description:
            </th>
            <td>
                <textarea name="description" id="" cols="30" rows="10" <?=$product['description']?>></textarea>
            </td>
        </tr>
        <tr>
            <th>
                Category:
            </th>
            <td>
                <select name="cat_id" id="">
                    <option value="" <?=$product['cat_id'] == $category['cat_id']?'selected':'' ?>></option>
                    <?php
                    foreach ($categories_obj->getList() as $category) {
                        $cat_id = $category['CAT_ID'];
                        $cat_name = $category['CAT_NAME'];
                        echo "<option value='$cat_id'>$cat_name</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="save" value="1">Create</button>
            </td>
        </tr>
    </table>
</form>