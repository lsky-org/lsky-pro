export default {
    state: {},

    open(id) {
        this.setState(id, {open: true});
    },

    close(id) {
        this.setState(id, {open: false});
    },

    isOpen(id) {
        return this.getState(id).open;
    },

    toggle(id) {
        let state = this.getState(id);
        return this.setState(id, {open: state.open = ! state.open});
    },

    isLoading(id) {
        return this.getState(id).loading ? true : false;
    },

    setLoading(id, loading) {
        this.setState(id, loading);
    },

    setState(id, data) {
        if (this.state[id] === undefined) {
            this.state[id] = {};
        }
        for (let dataKey in data) {
            this.state[id][dataKey] = data[dataKey];
        }
    },

    getState(id) {
        return this.state[id] || {};
    }
};
