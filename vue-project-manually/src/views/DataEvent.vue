<template>
  <!-- v-on:click, @click 이벤트 -->
  <div>
    <button type="button" v-on:click="one(), two()">2개이상의 함수를 호출</button>
    <button type="button" @click="increaseCounter">Add 1</button>
    <p>The counter is : {{ counter }}</p>
  </div>

  <!-- @change이벤트 -->
  <select v-model="selectedValue" @change="changeSelect">
    <option value="서울">서울</option>
    <option value="부산">부산</option>
    <option value="제주">제주</option>
  </select>

  <!-- key 이벤트(@keyup) 입력되는 키를 감지하여 이벤트를 발생 -->
  <!-- 이벤트 종류
  enter
  tab
  delete
  esc
  space
  up
  down
  left
  right
  여러키를 조합하여 사용할 수 있다.(특수키)
  <input @keyup.alt.enter="clear()">
  <div @click.ctrl="doSomething">Do something</div>
  -->
  <div><input @keyup.enter="one()"></div>

  <!-- computed와 watch -->
  <!-- computed -->
  <div>
    <h1>{{ firstName + ' ' + lastName }}</h1>
    <h1>{{ fullName }}</h1>
    Last Name<input type="text" v-model="lastName">
    <br>
    First Name<input type="text" v-model="firstName">
  </div>

  <!-- watch -->
  <!-- 값이 변경되면 변경된 값에 바인딩되어 있는 인스턴스의 이름과 같은 watch안에 설정해둔 함수가 실행된다. -->
  <h1>Full Name : {{ fullName1 }}</h1>
</template>
<script>
export default {
  name: 'DataEvent',
  components: {},
  data () {
    return {
      firstName: 'Changhyeon',
      lastName: 'Bae',
      counter: 0,
      selectedValue: '',
      fullName1: ''
    }
  },
  methods: {
    increaseCounter () {
      this.counter = this.counter + 1
    },
    one () {
      alert('One')
    },
    two () {
      alert('Two')
    },
    changeSelect () {
      alert(this.selectedValue)
    }
  },
  computed: {
    fullName () {
      return this.firstName + ' ' + this.lastName
    }
  },
  watch: {
    firstName () {
      this.fullName1 = this.firstName + ' ' + this.lastName
    },
    lastName () {
      this.fullName1 = this.lastName + ' ' + this.firstName
    }
  }
}
</script>
