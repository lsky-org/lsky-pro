<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StrategyRequest;
use App\Models\Strategy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StrategyController extends Controller
{
    use AuditsOperations;

    public function index(Request $request): View
    {
        $keywords = $request->query('keywords');
        $strategies = Strategy::query()->when($keywords, function (Builder $builder, $keywords) {
            $builder->where('name', 'like', "%{$keywords}%")->orWhere('intro', 'like', "%{$keywords}%");
        })->withCount('images')->withSum('images', 'size')->latest()->paginate();

        $strategies->appends(compact('keywords'));

        return view('admin.strategy.index', compact('strategies'));
    }

    public function add(): View
    {
        return view('admin.strategy.add');
    }

    public function edit(Request $request): View
    {
        /** @var Strategy $strategy */
        $strategy = Strategy::query()->findOrFail($request->route('id'));

        return view('admin.strategy.edit', compact('strategy'));
    }

    public function create(StrategyRequest $request): Response
    {
        $validated = $request->validated();
        $strategy = new Strategy($validated);

        DB::transaction(function () use ($strategy, $validated) {
            $strategy->save();
            $strategy->groups()->attach($validated['groups'] ?? []);
        });

        $this->auditOperation($request, 'admin.strategy.create', 'strategy', 'success', [
            'target' => $strategy->id,
        ]);

        return $this->success('创建成功');
    }

    public function update(StrategyRequest $request): Response
    {
        $validated = $request->validated();

        /** @var Strategy $strategy */
        $strategy = Strategy::query()->findOrFail($request->route('id'));
        $strategy->fill($validated);

        DB::transaction(function () use ($strategy, $validated) {
            $strategy->save();
            $strategy->groups()->sync($validated['groups'] ?? []);
        });

        $this->auditOperation($request, 'admin.strategy.update', 'strategy', 'success', [
            'target' => $strategy->id,
        ]);

        return $this->success('保存成功');
    }

    public function delete(Request $request): Response
    {
        $strategyId = $request->route('id');

        /** @var Strategy|null $strategy */
        $strategy = Strategy::query()->find($strategyId);
        if ($strategy) {
            DB::transaction(function () use ($strategy) {
                $strategy->images()->update(['strategy_id' => null]);
                $strategy->delete();
            });
        }

        $this->auditOperation($request, 'admin.strategy.delete', 'strategy', 'success', [
            'target' => $strategy ? $strategy->id : $strategyId,
            'found' => (bool) $strategy,
        ]);

        return $this->success('删除成功');
    }
}
