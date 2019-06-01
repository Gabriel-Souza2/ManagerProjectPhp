import crud from '../crud';
import Axios from 'axios';
const qs = require('qs');

const subtasks = crud('/api/subtasks');

subtasks.mutations.updateOne = (state, data) => {
    state.all.forEach((item, key) => {
        if(item.id == data.id) {
            state.all.splice(key, 1, data);
        }
    });
}

subtasks.actions.checked = ((context, subtask) => {
    const done = subtask.done == 1 ? 0 : 1;
    const data = { done }

    return Axios.put('/api/subtasks/' + subtask.id, qs.stringify(data)).then((res) => {
        context.commit('updateOne', res.data);
        return res.data;
    })
});



export default subtasks;