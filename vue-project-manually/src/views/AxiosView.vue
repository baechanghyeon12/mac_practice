<template>
  <!-- Axios 사용법 -->
  <!-- 
    axios.request( config )               axios.options( url[, config] )
    axios.get( url[, config] )            axios.post( url[, data[, config]] )
    axios.delete( url[, config] )         axios.put( url[, data[, config]] )
    axios.head( url[, config] )           axios.patch( url[, data[, config]] )
  -->
  <div>
  <table>
    <thead>
      <tr>
        <th>제품명</th>
        <th>가격</th>
        <th>카테고리</th>
        <th>배송료</th>
      </tr>
    </thead>
    <tbody>
      <tr :key="i" v-for="(product, i) in productList">
        <td>{{ product.product_name }}</td>
        <td>{{ product.price }}</td>
        <td>{{ product.category }}</td>
        <td>{{ product.delivery_price }}</td>
      </tr>
    </tbody>
  </table>
</div>
</template>
<script>
export default {
  name:'AxiosView',
  components: {}, 
  data() {
    return {
      productList: []
    };
  },
  created() {
    this.getList();
  },
  methods: {
    async getList() {
      this.productList = await this.$api("https://dbdd933d-36b2-485c-8c1c-9e18df51309a.mock.pstmn.io/list", "get");
    }
  }
}
</script>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
</style>